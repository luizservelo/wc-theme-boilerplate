<?php 

require '../../../_app/Config.inc.php';

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$json = null; 

if(!empty($post['action'])){
    $action = $post['action'];
    unset($post['action']);

    switch($action){
        case 'test' : 

            $json['message'] = "Você digitou: {$post['test-field']}";

            break;

        case 'test-button' : 

            $json['message'] = "Você clicou no botão";

            break;

        default : 

            $json['message'] = "Send an action";

            break;
    }

}
else{
    $json['message'] = "Send an action";
}

echo json_encode($json);