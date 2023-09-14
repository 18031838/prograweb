<?php
    class MensajesModel{

        private $id_mensaje;
        private $nombre;
        private $apepat;
        private $apemat;
        private $email;
        private $telefono;

        public function __construct($id_mensaje,$nombre,$apepat,$apemat,$email,$telefono)
        {
            $this->id_mensaje = $id_mensaje;
            $this->nombre = $nombre;
            $this->apepat = $apepat;
            $this->apemat = $apemat;
            $this->email = $email;
            $this->telefono = $telefono;
        }

        public function insertMensaje(){}
        public function updateMensaje(){}
        public function deleteMensaje(){}
        public function getAllMensaje(){}
    }
?>