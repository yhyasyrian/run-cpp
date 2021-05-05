<?php
system("clear");
echo "Welcome To Tool C++\n";
while(true){
  $code = readline("Enter You Code:");
  if(strtolower($code) != "run"){
    file_put_contents("test.cpp",$code."\n",FILE_APPEND);
  }else{
    $run = shell_exec("c++ test.cpp");
    if(preg_match('#error:#',$run)){
      echo $run;
    }else{
      echo "\033[0;32m"."Result:"."\033[0m";
      echo shell_exec('./a.out');
    }
    unlink("test.cpp");
    echo "\n";
    break;
  }
}
