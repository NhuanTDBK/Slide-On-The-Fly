<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
    public function authenticate()
    {
        $this->username = strtolower($this->username);
        $record = User::model()->findByAttributes(array('tendangnhap'=>$this->username));  //tìm kiếm user co 'tendangnhap' la this->username 
        if($record===null)
        {                                    
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        }
        else if($record->matkhau!==$this->password)            // so sánh mật khẩu
        {
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        }
        else
        {  
            $this->setState('name', $record->tendaydu);       
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
}