<?php
    
    abstract class AyudasMPActive {
        
        public static function Active($Controlador) {
            
            $Url = SysMisNeural::LeerURLModReWrite();
            
            if(isset($Url[1]))
            {
                if($Url[1]==$Controlador)
                {
                    return 'active';
                }
            }
            else
            {
                if($Controlador=='Index')
                {
                    return 'active';
                }
            }
        }
    }