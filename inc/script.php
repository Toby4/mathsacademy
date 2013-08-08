<?php
    function datauri($filename, $type) {
        $file = file_get_contents($filename);
        $data = base64_encode($file);
        $uri = "data:$type;base64,$data";
        return $uri;
    }
    
    function domainname() {
        $servername = $_SERVER['SERVER_NAME'];
        $domain = "http://$servername";
        return $domain;
    }
    
    function compress($filename) {
        $file = file_get_contents($filename);
        $compressed = str_replace(" ", "", $file);
        return $compressed;
    }
   
   function badge($badge) {
        $ip = $_SERVER['REMOTE_ADDR'];
        $file = fopen("db/$ip", "c");
        fwrite($file, $badge);
    }

?>

<script>
 
var score = "<?php echo $score; ?>";
console.log(score); 
</script>