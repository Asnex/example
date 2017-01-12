<?php

  class BreakLine {
      
      public static function br($num = 0){
           # Break line in php, with multiple options                      
    
         # set value of $case variable
         $case = "<br />";
         # call forLogic static method
         self::forLogic($case, $num);
   
      }
       public static function forLogic($case, $num){
         # If is numeric, allow permission to continue with the code
        if(is_numeric($num)) :
        # If number if 0 || 1, return just one br() 
        if($num == 0 || $num == 1):
                echo $case;
        # Else, return value of $num, br($num)
        else :
            for($i=0; $i<$num; $i++){
                echo $case;
            }
        endif;
        // Else, fire E_NOTICE
        else :
            E_NOTICE;
        endif;
     }
  }

  class Upload {
      # Setting the properties
      private $target_dir;
      private $target_file;
      protected $tmp_name;
      protected $imageSize;
      protected $imageName;
      protected $dpi;
      private $uploadPermission;
      private $check;

     # Construct $_FILES
      public function __construct() {
          $this->target_dir =  "/var/www/vhost/example.sportret.com/public_html/upload/images/";
          $this->target_file = $this->target_dir . basename($_FILES["fileToUpload"]["name"]);
          $this->tmp_name = $_FILES["fileToUpload"]["tmp_name"];
          $this->imageSize = $_FILES["fileToUpload"]["size"];
          $this->imageName = $_FILES["fileToUpload"]["name"];
          $this->dpi = 200;
      }
      
      # Only public method in this class, for handling the requests from $_POST
      public  function checkMe(){
          
          if($this->is_empty() == false) :
              echo "Stoping the script";
          else:
          $this->is_image();
          $this->imageUpdateName();
          $this->imageSize();
          $this->imageDimensions();
          $this->imageMod();
          $this->imageResolution();
          $this->imageUpload();
         
          endif;
          
         
      }
      # Checking does input from ajax $post is empty, if is, stop the script
      private function is_empty(){
          if(empty($this->tmp_name)):
              echo "File is empty";
              BreakLine::br();
                  return false;
              else:
                  return true;
          endif;
         
      }
      # Checking does input is image
      private function is_image(){
          
           # First, we will check is it uploaded file an image
       
           $this->check = getimagesize($this->tmp_name);
      if($this->check !== false) {
        echo "Success!!! file is an image - " . $this->check['mime'] . ".";
        BreakLine::br();
        return $this->uploadPermission = 1;
    } else {
        echo "File is not an image. Abort!";
        BreakLine::br();
        return $this->uploadPermission = 0;
    }

      }
      
      # Set appropriate and secure image name for DPI settings
      private function imageUpdateName(){
          
          $image = explode(".", $this->imageName);
          $this->imageName = time() . ".jpg";
          return $this->imageName;
      }
      # Check does image size is larger than 5MB
      private function imageSize(){
          
          # If image size is larger than 5MB, return false
          if ($this->imageSize > 5000000) {
    echo "Sorry, your file is too large.";
        BreakLine::br();
        return $this->uploadPermission = 0;
}
      }
      # Check image width and height
      private function imageDimensions(){
          # Get list of key=>value from array getimagesize
          list($width, $height) = getimagesize($this->tmp_name);
          # Check does image size corespond to wanted dimensions of image, using ternary operator
          echo ($width <= 1280 && $height <= 768) ?  "Image dimensions are less than 1280 X 768, so permission is :" . $this->uploadPermission = 1 :  $this->uploadPermission = 0;
      }
      
      # Get image mod channels
      private function imageMod(){
          
           $channels = getimagesize($this->tmp_name);
           # If jpg, jpeg, gif
           if($channels['mime'] == "image/jpg" || $channels['mime'] == "image/jpeg" || $channels['mime'] == "image/gif") :
              $channelLogic = $channels['channels'];
              $this->getChannels($channelLogic);
           # Else if png   
           elseif($channels['mime'] == "image/png") :
        
        $this->get_png_imageinfo($this->tmp_name);
    
    else: 
        
        BreakLine::br();
        echo "Can't get channel";
    endif;
           
   
    
      }
      
      # Get channel from png image
      private function get_png_imageinfo($file) {
	if (empty($file)) return false;
	$info = unpack('A8sig/Nchunksize/A4chunktype/Nwidth/Nheight/Cbit-depth/'.
        'Ccolor/Ccompression/Cfilter/Cinterface', 
		file_get_contents($file,0,null,0,29));
	
	$color = $info['color'];
	$type = array(0=>'Greyscale', 2=>'Truecolour', 3=>'Indexed-colour',
	4=>'Greyscale with alpha', 6=>'Truecolour with alpha');
	if (empty($type[$color]))
		return false; // invalid color value
	$info['color-type'] = $type[$color];
	$samples = ((($color%4)%3)?3:1)+($color>3);
	$channelLogic = $channels['channels'] = $samples;
        $this->getChannels($channelLogic);
         
        
}
    # Private function for getting the channels, 3 for RGB, 4 for CMYK
    private function getChannels($channelLogic){
        if($channelLogic == 3) :
        BreakLine::br();
        echo 'Channel is RGB';
    elseif($channelLogic == 4):
        BreakLine::br();
         echo 'Channel is CMYK';
    endif;
    }
    
    # Setting the DPI
    private function imageResolution() {
  
    exec("convert $this->tmp_name -set units PixelsPerInch -density $this->dpi $this->imageName"); 
     BreakLine::br();
    echo "Density is set to 200 DPI.";

  }
   
    # Finaly, image upload
    private function imageUpload(){
        if($this->uploadPermission == 1):
              if (move_uploaded_file($this->tmp_name, $this->target_file)) {
          BreakLine::br();
        echo "The file ". basename($this->imageName). " has been uploaded.";
    } else {
        BreakLine::br();
        echo "Sorry, there was an error uploading your file.";
    }
        else:
            
          BreakLine::br();
        echo "Sorry, some of the credentials aren't OK! Image cannot be uploaded";
        endif;
    
  }
   # Show last uploaded image
  public function showImage(){
      $path = "src='$this->imageName'";
      BreakLine::br(3);
      echo $image = "<img $path />";
  }
  }
