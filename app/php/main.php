<?php 

    //error_reporting(0);

    include 'Util/form.php';
    include 'Util/Database/crud.php';
    include 'Util/contract.php';
    include 'Util/export.php'; 
    include 'Util/Mail/mail.php';

    class Sport{
        private $crud;
        private $form;

        private $form_value_names;

        function __construct(){
            $this->crud=new Crud();
            $this->form=new Form();

            $this->form_value_names=array("sport");
        }

        function insert(){
            //Form Handelling
            $form_values=$this->form->get_form_values($this->form_value_names);

            //Database
            $this->crud->insert(Sport_Contract::$table_name,Sport_Contract::get_columns(),$form_values);
        }
    }

    class Product{
        private $crud;
        private $form;

        private $form_file_names;
        private $form_value_names;

        function __construct(){
            $crud=new Crud();
            $form=new Form();

            $this->form_file_names=array();
            $this->form_value_name=array();
        }

        function insert(){
            //Form Handelling
            $form_files=$this->form->get_form_files();
            $form_values=$this->form->get_form_values();

            //Database
            $this->crud->insert(User_Contract::$table_name,User_Contract::get_columns(),array_merge($form_files,$form_values));
        }
    }

    class Accessories{
        private $crud;
        private $form;

        private $form_file_names;
        private $form_value_names;

        function __construct(){
            $crud=new Crud();
            $form=new Form();

            $this->form_file_names=array();
            $this->form_value_name=array();
        }
    }

    class Stadium{
        private $crud;
        private $form;

        private $form_file_names;
        private $form_value_names;

        function __construct(){
            $crud=new Crud();
            $form=new Form();
        }

        function insert(){
            //Form Handelling
            $form_files=$this->form->get_form_files();
            $form_values=$this->form->get_form_values();

            //Database
            $this->crud->insert(User_Contract::$table_name,User_Contract::get_columns(),array_merge($form_files,$form_values));
        }
    }

    class Stadium_Accessories extends Stadium{
        private $crud;
        private $form;

        private $form_value_names;

        function __construct(){
            $crud=new Crud();
            $form=new Form();

            $this->form_file_names=array();
            $this->form_value_name=array();
        }

        function insert(){
            //Form Handelling
            $form_values=$this->form->get_form_values();

            //Database
            $this->crud->insert(User_Contract::$table_name,User_Contract::get_columns(),$form_values);
        }

        function update($id){
            //Form Handelling
            $form_values=$this->form->get_form_values();

            //Database
            $this->crud->update(User_Contract::$table_name,$id,User_Contract::get_columns(),$form_values);
        }
    }

    class Tournament{
        private $crud;
        private $form;

        private $form_file_names;
        private $form_value_names;

        function __construct(){
            $crud=new Crud();
            $form=new Form();

            $this->form_file_names=array();
            $this->form_value_name=array();
        }

        function insert(){
            //Form Handelling
            $form_files=$this->form->get_form_files();
            $form_values=$this->form->get_form_values();

            //Database
            $this->crud->insert(User_Contract::$table_name,User_Contract::get_columns(),array_merge($form_files,$form_values));
        }
    }

    class User{
        private $crud;
        private $form;

        private $form_file_names;
        private $form_value_names;

        protected $stadium;
        protected $tournament;

        function __construct(){
            $this->crud=new Crud();
            $this->form=new Form();

            $this->form_file_names=array();
            $this->form_value_name=array();

            $this->stadium=new Staduim();
            $this->tournament=new Tournament();
        }

        function insert_stadium(){
            //Form Handelling
            $form_files=$this->form->get_form_files();
            $form_values=$this->form->get_form_values();

            //Database
            $this->crud->insert(User_Contract::$table_name,User_Contract::get_columns(),array_merge($form_files,$form_values));
        }
    }

    /*trait Premium{
        private $crud;
        private $form;

        function __construct(){
            $crud=new Crud();
            $form=new Form();
        }

        function insert(){
            //Form Handelling
            $form_values=$this->form->get_form_values();

            //Database
            $this->crud->insert(User_Contract::$table_name,User_Contract::get_columns(),$form_values);
        }
    }*/

?>