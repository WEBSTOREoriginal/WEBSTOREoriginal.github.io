<?
 
if(isset($_POST["name"]))
{
        if(isset($_POST["name"]))
        {
                $name = $_POST["name"];
        }
        if(isset($_POST["phone"]))
        {
                $phone= $_POST["phone"];
        }
        if(isset($_POST["body"]))
        {
                $body = $_POST["body"];
        }
 
        if($name=="" or $phone=="" or $body=="")
        { 
                echo "Пожалуйста, заполните все поля";
        }
        else
        {
                $ip=$_SERVER["REMOTE_ADDR"]; 
                $brose=$_SERVER["HTTP_USER_AGENT"]; 
                $to = "toxa.fadeenkov@bk.ru"; 
                $subject = "Сообщение c сайта a-devel.com"; 
                $headers .= "Content-Type: text/html;
                ";
                $headers .= "Отправитель: Посетитель сайта"; 
                $message = "
                Имя: $name<br>
                Телефоны: $phone<br>
                Текст: $body<br><br>
 
                IP отправителя: $ip<br>
                Браузер отправителя: $brose<br>
                ";
 
                $send = mail($to, $subject, $message, $headers);
                if ($send == "true")
                {
                        echo "Ваше сообщение отправлено. Мы ответим вам в ближайшее время.";
                }
                else
                {
                        echo "Не удалось отправить, попробуйте снова!";
                }
        }
}
 
?>