<?php

namespace MRC\Model;

interface ClienteInterface {
    public function getImportancia();
    
    public function EnderecoCobranca($end);
}
