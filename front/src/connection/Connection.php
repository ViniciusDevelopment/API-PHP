<?php 

    namespace Connections;

    Class Connection {

        // a função api espera três coisas, a url onde será feita a requisição, o método esperado e o json que a api espera
        // após isso a função curl nativa do php é usada para configurar tudo necessário.
        function Api ($url, $method, $data) {

            // inicia o curl para conseguir fazer requisição para a api
            $require = curl_init ();

            // define qual é a url destino da api (chamada de end point) que receberá a requisição
            curl_setopt ($require, CURLOPT_URL, $url);

            // aqui estamos falando que esperamos uma resposta da api
            curl_setopt ($require, CURLOPT_RETURNTRANSFER, true);

            // aqui definiremos o que mandaremos para a api, no caso o json
            curl_setopt ($require, CURLOPT_POSTFIELDS, $data);

            // aqui definimos um cabeçalho falando que o conteúdo que estamos mandando é um json
            curl_setopt ($require, CURLOPT_HTTPHEADER, array (
                "Content-Type: application/json"
            ));

            // aqui definimos o último parametro do curl que é qual método queremos. Dependendo do que está no $method o switch case define qual o método da requisição
            switch ($method) {

                case "post" : 

                    curl_setopt ($require, CURLOPT_POST, 1);
                    break;

                // case "get" : 

                //     curl_setopt ($require, CURLOPT_GET, 1);
                //     break;

                // case "put" : 

                //     curl_setopt ($require, CURLOPT_PUT, 1);
                //     break;

                // case "delete" : 

                //     curl_setopt ($require, CURLOPT_DELETE, 1);
                //     break;
                
                default : 

                    echo ("método não existe");
                    break;
            }
    
            // aqui executamos o curl e devolvemos a resposta
            $response = curl_exec ($require);

            return $response;
        }
        
    }
?>