<?php
    
    # #####################################################################################
	#
	#	Neural Framework (Framework en PHP)
	#
	#	@author: 	Zyos Ilusionista <neural.framework@gmail.com> <Zyos_Ilusionista@hotmail.com>
	#	@license: 	Licencia GNU/GPL (http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt)
	#
	#	Edicion Beta de Lanzamiento de Neural Framework.
	#
	#	http://github.com/neuralframework/
	#
	# #####################################################################################
	
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