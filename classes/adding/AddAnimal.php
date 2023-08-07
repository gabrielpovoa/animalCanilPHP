<?php 

class ReceivingAnimal {
    private $name;
    private $sex;
    private $avatar;
    
    private function __construct($name, $sex, $picture)
    {
    $this->name = $name;    
    $this->sex = $sex;    
    $this->avatar = $picture;    
    }

    public function processForm() {
        $avatarName = $this->avatar['name'];
        $avatarTmpName = $this->avatar['tmp_name'];
        $avatarSize = $this->avatar['size'];
        $avatarType = $this->avatar['type'];

        $uploadDirectory = 'avatars/';
        $uploadedFilePath = $uploadDirectory . $avatarName;
        move_uploaded_file($avatarTmpName, $uploadedFilePath);
    
        echo "Name: " . $this->name . "<br>";
        echo "Gender: " . $this->sex . "<br>";
        echo "Avatar Name: " . $avatarName . "<br>";
        echo "Avatar Size: " . $avatarSize . " bytes<br>";
        echo "Avatar Type: " . $avatarType . "<br>";
        echo "Avatar Location: " . $uploadedFilePath . "<br>";
    }
}