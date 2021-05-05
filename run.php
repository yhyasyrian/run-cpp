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
      echo "\033[0;32m".shell_exec('./a.out')."\033[0m";
    }
    unlink("test.cpp");
    echo "\n";
    break;
  }
}
