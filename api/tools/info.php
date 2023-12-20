/**
* 获取服务器端IP地址
 * @return string
 */
function getServerIp() { 
    if (isset($_SERVER)) { 
        if($_SERVER['SERVER_ADDR']) {
            $server_ip = $_SERVER['SERVER_ADDR']; 
        } else { 
            $server_ip = $_SERVER['LOCAL_ADDR']; 
        } 
    } else { 
        $server_ip = getenv('SERVER_ADDR');
    } 
    return $server_ip; 
}
或者
function getServerIP(){    
    return gethostbyname($_SERVER["SERVER_NAME"]);    
} 