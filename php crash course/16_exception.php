<?php

function inverse($x){
    if(!$x){
        throw new Exception('Division by Zero');
    }
else{
    return 1/$x;

}
}


try {
    echo inverse(10);
    echo inverse(0);
} catch(Exception $e){
    echo 'Caught Exception', $e->getMessage(), ' ';
}finally {
    echo 'First Finally';
}

echo 'Hello World';