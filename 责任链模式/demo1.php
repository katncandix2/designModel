<?php
    interface Command{
        function onCommand($name,$args);
    }
    
    class CommandChain{
        private $_commands = array();

        public function addCommand($cmd){
            $this->_commands[] = $cmd;
        }

        public function runCommand($name,$args){
            foreach($this->_commands as $cmd){
                if($cmd->onCommand($name,$args))
                    return;
            }   
        }
    
    }

    class CustCommand implements Command{
        public function onCommand($name,$args){
            if($name!='addCustomer'){
                return false;
            }
            echo 'this is CustomerCommand handing ';
            echo '<br/>';
            return true;   
        }
    }

    class MailCommand implements Command{
        public function onCommand($name,$args){
            if($name!='mail'){
                return false;
            }
            echo 'this is MailCommand handing';
            echo '<br/>';
            return true;
        }
    }
    $cc = new CommandChain();
    $cc->addCommand(new CustCommand());
    $cc->addCommand(new MailCommand());
    $cc->runCommand('addCustomer',null);
    $cc->runCommand('mail',null);


