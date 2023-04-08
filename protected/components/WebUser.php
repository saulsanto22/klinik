<?php 


class WebUser extends CWebUser

    {
        public function checkAccess($operation, $params=array())
        {
            if (empty($this->id)) {
                return false;
            }

            $role = $this->getState('role');
            if ($role === 'admin') {
                return true;
            }

            return false;
        }
    }