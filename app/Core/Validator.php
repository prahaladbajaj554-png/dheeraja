<?php
namespace App\Core;

class Validator
{
    private array $errors = [];

    public function validate(array $data, array $rules): bool
    {
        $this->errors = [];

        foreach ($rules as $field => $fieldRules) {
            $value = $data[$field] ?? null;
            $ruleList = is_string($fieldRules) ? explode('|', $fieldRules) : $fieldRules;

            foreach ($ruleList as $rule) {
                $params = [];
                if (strpos($rule, ':') !== false) {
                    [$ruleName, $paramStr] = explode(':', $rule, 2);
                    $params = explode(',', $paramStr);
                } else {
                    $ruleName = $rule;
                }

                switch ($ruleName) {
                    case 'required':
                        if ($value === null || $value === '' || (is_array($value) && empty($value))) {
                            $this->addError($field, ucfirst(str_replace('_', ' ', $field)) . " is required.");
                        }
                        break;

                    case 'email':
                        if (!empty($value) && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                            $this->addError($field, "A valid email address is required.");
                        }
                        break;

                    case 'numeric':
                        if (!empty($value) && !is_numeric($value)) {
                            $this->addError($field, ucfirst(str_replace('_', ' ', $field)) . " must be a number.");
                        }
                        break;

                    case 'min':
                        $min = (int)($params[0] ?? 0);
                        if (!empty($value) && strlen((string)$value) < $min) {
                            $this->addError($field, ucfirst(str_replace('_', ' ', $field)) . " must be at least {$min} characters.");
                        }
                        break;

                    case 'max':
                        $max = (int)($params[0] ?? 255);
                        if (!empty($value) && strlen((string)$value) > $max) {
                            $this->addError($field, ucfirst(str_replace('_', ' ', $field)) . " cannot exceed {$max} characters.");
                        }
                        break;

                    case 'in':
                        if (!empty($value) && !in_array($value, $params)) {
                            $this->addError($field, "Selected value for " . str_replace('_', ' ', $field) . " is invalid.");
                        }
                        break;

                    case 'unique':
                        $table = $params[0] ?? '';
                        $column = $params[1] ?? $field;
                        $ignoreId = $params[2] ?? null;

                        if (!empty($value) && !empty($table)) {
                            $sql = "SELECT COUNT(*) as cnt FROM `{$table}` WHERE `{$column}` = :val";
                            $queryParams = ['val' => $value];
                            if ($ignoreId) {
                                $sql .= " AND id != :ignore_id";
                                $queryParams['ignore_id'] = $ignoreId;
                            }
                            $row = Database::fetchOne($sql, $queryParams);
                            if (!empty($row['cnt'])) {
                                $this->addError($field, ucfirst(str_replace('_', ' ', $field)) . " is already registered.");
                            }
                        }
                        break;
                }

                // If field already has an error, stop evaluating further rules for it
                if (isset($this->errors[$field])) {
                    break;
                }
            }
        }

        return empty($this->errors);
    }

    public function addError(string $field, string $message): void
    {
        $this->errors[$field] = $message;
    }

    public function errors(): array
    {
        return $this->errors;
    }

    public function firstError(): ?string
    {
        return !empty($this->errors) ? reset($this->errors) : null;
    }
}
