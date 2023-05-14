<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet">
    <title>Задание 23 мoдуля</title>
  </head>
  <body>
  <?php

interface interfaceMekhanic
{
    public function forwBack();
    public function ManipulateOn();
    public function ManipulateOff();
    public function ManipulateStatus();
}
abstract class Mekhanic implements interfaceMekhanic
{

}
class Auto extends Mekhanic
{
  protected $auto;
  private $nitrogen;
  private $_wipers;
  private $_signale;
  private $salonType;
  public function forwBack()
  {
    return $this->auto;
  }
  public function Wipers($on_Off)
  { 
    $this->_wipers=$onOff;    
  }
  public function WipersStatus()
  {
    return $this->_wipers;
  }
  public function Signale($on_Off)
  { 
    $this->_signale=$onOff;   
  }
  public function SignaleStatus()
  {
    return $this->_signale;
  }
  public function Salon($type)
  {
    $this->salonType=$type;
  }
  public function GetSalon()
  {
    return $this->salonType;
  }
    public function ManipulateOn()
    {
        $this->nitrogen=true;
    }
    public function ManipulateOff()
    {
        $this->nitrogen=false;
    }
    public function ManipulateStatus()
    {
        return $this->nitrogen;
    }
}
class Tank extends Mekhanic
{    
    public function forwBack()
    {

    }
    public function ManipulateOn()
    {
        
    }
    public function ManipulateOff()
    {
        
    }
    public function ManipulateStatus(){
        
    }
}  
class Special extends Mekhanic  
{
    private $ladle;
    public function ManipulateOn()
    {
        $this->ladle=true;
    }
    public function ManipulateOff()
    {
        $this->ladle=false;
    }
    public function ManipulateStatus()
    {
        return $this->ladle;
    }
    public function forwBack()
    {

    }

}
    
?>        
    </body>
</html>
