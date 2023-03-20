<?php

namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use  PHPMVC\Models\EmployeeModel;

class EmployeeController extends AbstractController
{

    use InputFilter;
    use Helper;

    public function defaultAction()
    {
        $this->_language->load('template.common');
        $this->_language->load('employee.default');
        $this->_data['employees'] = EmployeeModel::getAll();
        echo $this->_view();
    }

    public function addAction()
    {
        $this->_language->load('template.common');

        if (isset($_POST['submit'])) {
            $emp = new EmployeeModel();
            $emp->emp_name = $this->filterString($_POST['empname']);
            $emp->dob = $this->filterDate($_POST['dob']);
            // var_dump($emp->dob);
            $emp->address = $this->filterString($_POST['address']);
            $emp->tax = $this->filterFloat($_POST['tax']);
            $emp->salary = $this->filterFloat($_POST['salary']);
            $emp->gender = $this->filterString($_POST['gender']);
            $emp->serial_number = $this->filterString($_POST['sernumber']);
            $emp->position = $this->filterString($_POST['position']);

            if ($emp->save()) {
                // echo $emp->emp_name . " is saved succefully with id ".$emp->id;

                $_SESSION['message'] = 'Employee saved successfully';
                $this->redirect('/index.php/employee');
            }
        }
        echo $this->_view();
    }

    public function editAction()
    {
        $this->_language->load('template.common');

        $id = $this->filterInt($this->_params[0]);
        $emp = EmployeeModel::getByPK($id);

        if ($emp === false) {
            $this->redirect('/index.php/employee');
        }
        $this->_data['employee_data'] = $emp;
        // var_dump($emp);

        if (isset($_POST['submit'])) {
            $emp->emp_name = $this->filterString($_POST['empname']);
            $emp->dob = $this->filterDate($_POST['dob']);
            $emp->address = $this->filterString($_POST['address']);
            $emp->tax = $this->filterFloat($_POST['tax']);
            $emp->salary = $this->filterFloat($_POST['salary']);
            $emp->gender = $this->filterString($_POST['gender']);
            $emp->serial_number = $this->filterString($_POST['sernumber']);
            $emp->position = $this->filterString($_POST['position']);

            if ($emp->save()) {
                $_SESSION['message'] = 'Employee Updated successfully';
                $this->redirect('/index.php/employee');
            }
        }
        echo $this->_view();
    }

    public function deleteAction()
    {

        $id = $this->filterInt($this->_params[0]);
        $emp = EmployeeModel::getByPK($id);

        if ($emp === false) {
            $this->redirect('/index.php/employee');
        }
        if ($emp->delete()) {
            $_SESSION['message'] = 'Employee deleted successfully';
            $this->redirect('/index.php/employee');
        }
    }
}
