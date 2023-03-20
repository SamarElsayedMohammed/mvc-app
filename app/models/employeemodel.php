<?php

namespace PHPMVC\Models;

use PHPMVC\Models\AbstractModel;

class EmployeeModel extends AbstractModel
{

  public $id;
  public $emp_name;
  public $dob;
  public $address;
  public $tax;
  public $salary;
  public $gender;
  public $serial_number;
  public $position;

  public static $db;

  protected static $tableName = 'employees';
  protected static $tableSchema = array(
    'emp_name' => self::DATA_TYPE_STR,
    'dob' => self::DATA_TYPE_STR,
    'address' => self::DATA_TYPE_STR,
    'tax' => self::DATA_TYPE_DECIMAL,
    'salary' => self::DATA_TYPE_DECIMAL,
    'gender' => self::DATA_TYPE_STR,
    'serial_number' => self::DATA_TYPE_STR,
    'position' => self::DATA_TYPE_STR,
  );
  protected static $primaryKey = 'emp_id';
}
