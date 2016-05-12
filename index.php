<?php
    include_once("classes/cls.pluginapi.php");
    
    class plugin_change_language
    {
        public function on_more_settings()
        {
            global $msg;
            
            if(isset($_COOKIE['lang'])) {
                $current_lang = $_COOKIE['lang'];
            } else {
                $current_lang = $msg['defaultLanguage'];
            }
         
            //Enter the HTML in here:
            ?>
                <div>
                    <div>Language</div>
                    <select name="lang" class="form-control">
                        <?php 
                        
                        foreach($msg['msgs'] as $lang => $this_lang) { ?>
                              <option value="<?php echo $lang ?>" <?php if($lang == $current_lang) { ?>selected="selected"<?php } ?>><?php echo $this_lang['fullnameEnglish'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            
            <?php
            
            return true;
            
        }
        
        public function on_save_settings($user_id, $full_request, $type)
        {
            //Do your thing in here. Here is a sample.
            $api = new cls_plugin_api();
            
            switch($type) {
                default:
                    if(isset($full_request['lang'])) {
                        $old_lang = $_COOKIE['lang'];
                        
                        $cookie_name = "lang";
                        $cookie_value = $full_request['lang'];
                        setcookie($cookie_name, $cookie_value, time() + (365*3*60*60*24*1000), "/"); // 86400 = 1 day
                        
                        //Now refresh the current page
                        if($cookie_value != $old_lang) {
                             return "RELOAD"; //This reloads the entire page
                        }
                    }
                break;
            }
            
            return true;        
            
        
        }
    }
?>
