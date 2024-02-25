<?php

    class Paciente 
    {
        private $identificacion;
        private $nombre;
        private $apellidos;
        private $sexo;
        private $fechaNacimiento;
        private $conexion;

        //constructor
        public function crearPaciente($identificacion,$nombre,$apellidos,$sexo,$fechaNacimiento)
        {
            $this-> identificacion=$identificacion;
            $this-> nombre=$nombre;
            $this-> apellidos=$apellidos;
            $this-> sexo=$sexo;
            $this-> fechaNacimiento=$fechaNacimiento;

        }

        public function agregarPaciente(){
            //TODO
        }

        public function actualizarPaciente(){
            //TODO
        }
        
        public function desactivarPaciente(){
            //TODO
        }


    }

 