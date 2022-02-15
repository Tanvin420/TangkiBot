<?php

$hubVerifyToken = 'xamal'; 
$accessToken = '';

$attachment_id1=1016770305760020;
$attachment_id2=625819325049860;


if ($_REQUEST['hub_verify_token'] === $hubVerifyToken) {
    echo $_REQUEST['hub_challenge'];
    exit;
}
$raw = file_get_contents('php://input');


$input = json_decode($raw, true);

$senderId = $input['entry'][0]['messaging'][0]['sender']['id'];
$messageText = $input['entry'][0]['messaging'][0]['message']['text'];
$buttonClick = $input['entry'][0]['messaging'][0]['postback']['payload'];
$quickReplyClick = $input['entry'][0]['messaging'][0]['message']['quick_reply']['payload'];
$response = null;



if ($messageText == 'Hi'||$messageText == 'hi'||$messageText == 'Hello'||$messageText == 'hello'||$messageText == 'hlw'||$messageText == 'Hlw'||$messageText == 'Oi'||$messageText == 'oi'||$messageText == 'OI'||$messageText == 'HELLO'||$messageText == 'HLW'||$messageText == 'হাই'||$messageText == 'হেলো'||$messageText =='ওই'||$messageText =='অই'||$messageText == 'Hi!'||$messageText == 'hi!'||$messageText == 'Hello!'||$messageText == 'hello!'||$messageText == 'hlw!'||$messageText == 'Hlw!'||$messageText == 'Oi!'||$messageText == 'oi!'||$messageText == 'OI!'||$messageText == 'HELLO!'||$messageText == 'HLW!'||$messageText == 'হাই!'||$messageText == 'হেলো!'||$messageText =='ওই!'||$messageText =='অই!')  
{   
    //button Message
    $answer = [
        "attachment" =>
        [
            "type" => "template",
            "payload" =>
            [
                "template_type" => "button",
                "text" => "হাই! আমি টাংকি BOT 😁। চলো আমরা টাংকি মারি 😶।",
                "buttons" => [

                    [
                        "type" => "postback",
                        "title" => "হু, চলো। 😝",
                        "payload" => "button1"
                    ],
                    [
                        "type" => "postback",
                        "title" => "না থাক। 😒",
                        "payload" => "button2"
                    ],


                ],
            ],
        ],
    ];
    $response = [
        'recipient' => ['id' => $senderId],
        'message' => $answer
    ];
} 
else if ($buttonClick == 'button1') {

    //quick reply
    $answer =   [
        "text" => "তুমি এতো সুন্দর কেনো?",
        "quick_replies" => [
            [
                "content_type" => "text",
                "title" => "জানি না 😒",
                "payload" => "qr1.1",

            ],
            [
                "content_type" => "text",
                "title" => "যাহ দুষ্ট 😳",
                "payload" => "qr1.2",

            ],

        ]
    ];
    //response for qr
    $response = [
        'recipient' => ['id' => $senderId],
        'messaging_type' => 'RESPONSE',
        'message' => $answer,
    ];
    
} 
else if ($buttonClick == 'button2') {

    //text msg
    $answer = 'আচ্ছা পরে কথা হবে।🥺';

    //!--------
    //response for text
    $response = [
        'recipient' => ['id' => $senderId],
        'message' => ['text' => $answer]
    ];
}

else if ($quickReplyClick == 'qr1.1') 
{

    $answer =   [
        "text" => "কারণ সুন্দর মানুষই আমার সাথে কথা বলে 😎এখন তো জানলা 😛",
        "quick_replies" => [
            [
                "content_type" => "text",
                "title" => "জেনে খুশি হলাম😑",
                "payload" => "qr2.1",

            ],
            [
                "content_type" => "text",
                "title" => "এমনে টাংকি মারে নাকি কেউ🙄",
                "payload" => "qr2.2",

            ],

        ]
    ];
    //response for qr
    $response = [
        'recipient' => ['id' => $senderId],
        'messaging_type' => 'RESPONSE',
        'message' => $answer,
    ];
}

else if ($quickReplyClick == 'qr1.2')
{
    $answer =   [
        "text" => "হে হে😜। কবিতা শুনবা?😶",
        "quick_replies" => [
            [
                "content_type" => "text",
                "title" => "হ্যা শুনবো😛",
                "payload" => "qr2.3",

            ],
            [
                "content_type" => "text",
                "title" => "না ভাল্লাগে না😐",
                "payload" => "qr2.4",

            ],

        ]
    ];
    //response for qr
    $response = [
        'recipient' => ['id' => $senderId],
        'messaging_type' => 'RESPONSE',
        'message' => $answer,
    ];
}

else if ($quickReplyClick == 'qr2.1'||$quickReplyClick == 'qr2.2')
{
    $answer =   [
        "text" => "যাই হোক, কবিতা শুনবা?😶",
        "quick_replies" => [
            [
                "content_type" => "text",
                "title" => "হ্যা শুনবো😛",
                "payload" => "qr2.3",

            ],
            [
                "content_type" => "text",
                "title" => "না ভাল্লাগে না😐",
                "payload" => "qr2.4",

            ],

        ]
    ];
    //response for qr
    $response = [
        'recipient' => ['id' => $senderId],
        'messaging_type' => 'RESPONSE',
        'message' => $answer,
    ];
}
else if ($quickReplyClick == 'qr2.3'||$quickReplyClick == 'qr3.3'||$quickReplyClick == 'qr4.4')
{
    $answer =   [
        "text" => " বন্ধু তুমি একা হলে আমায় দিও ডাক, তোমার সাথে গল্প করবো আমি সারা রাত😁 ",
        "quick_replies" => [
            [
                "content_type" => "text",
                "title" => "হাহা 🤣,আরো শুনাও😂",
                "payload" => "qr3.1",

            ],
            [
                "content_type" => "text",
                "title" => "ইশ ফালতু🙄",
                "payload" => "qr3.2",

            ],

        ]
    ];
    //response for qr
    $response = [
        'recipient' => ['id' => $senderId],
        'messaging_type' => 'RESPONSE',
        'message' => $answer,
    ];
}
else if ($quickReplyClick == 'qr2.4')
{
    $answer =   [
        "text" => "তো কি করবা😑🙄",
        "quick_replies" => [
            [
                "content_type" => "text",
                "title" => "আচ্ছা যাও কবিতা শুনাও🙄",
                "payload" => "qr3.3",

            ],
            [
                "content_type" => "text",
                "title" => "কিছু না😒",
                "payload" => "qr3.4",

            ],

        ]
    ];
    //response for qr
    $response = [
        'recipient' => ['id' => $senderId],
        'messaging_type' => 'RESPONSE',
        'message' => $answer,
    ];
}
else if ($quickReplyClick == 'qr3.1')
{
    $answer =   [
        "text" => "বামে গরু ডানে খাসি, আমি তোমায় ভালোবাসি 😘",
        "quick_replies" => [
            [
                "content_type" => "text",
                "title" => "আরো শুনাও 😆",
                "payload" => "qr4.1",

            ],
            [
                "content_type" => "text",
                "title" => "থাক হইছে হইছে😂",
                "payload" => "qr4.2",

            ],

        ]
    ];
    //response for qr
    $response = [
        'recipient' => ['id' => $senderId],
        'messaging_type' => 'RESPONSE',
        'message' => $answer,
    ];
}

else if ($quickReplyClick == 'qr3.2'||$quickReplyClick == 'qr4.2')
{
    $answer =   [
        "text" => "আচ্ছা মিমস দেখবা?😶",
        "quick_replies" => [
            [
                "content_type" => "text",
                "title" => " হু দেখাও😀 ",
                "payload" => "qr4.5",

            ],
            [
                "content_type" => "text",
                "title" => " না থাক।😅 ",
                "payload" => "qr4.6",

            ],

        ]
    ];
    //response for qr
    $response = [
        'recipient' => ['id' => $senderId],
        'messaging_type' => 'RESPONSE',
        'message' => $answer,
    ];
}
else if ($quickReplyClick == 'qr4.1')
{
    $answer =   [
        "text" => " আর তো পারি না😅😅,আচ্ছা মিমস দেখবা?😶",
        "quick_replies" => [
            [
                "content_type" => "text",
                "title" => "হু দেখাও😏🙄",
                "payload" => "qr4.5",

            ],
            [
                "content_type" => "text",
                "title" => "না থাক।😅",
                "payload" => "qr4.6",

            ],

        ]
    ];
    //response for qr
    $response = [
        'recipient' => ['id' => $senderId],
        'messaging_type' => 'RESPONSE',
        'message' => $answer,
    ];
}



//মিমস
else if ($quickReplyClick == 'qr4.5')
{
    $accessToken = $GLOBALS["accessToken"];
    $input = $GLOBALS["input"];
    $senderId = $GLOBALS["senderId"];
    $attachment_id=1016770305760020;

    $resp = '{
  "recipient":{
    "id":"' . $senderId . '"
  },
  "message":{
    "attachment":{
      "type":"image", 
      "payload":{
        "attachment_id": "' . $attachment_id . '"
      }
    }
  }
}';
$ch = curl_init('https://graph.facebook.com/v8.0/me/messages?access_token=' . $accessToken);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $resp);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
if (!empty($input)) {
 
    $result = curl_exec($ch);
}
curl_close($ch);


    $answer =   [
        "text" => "আরো মিমস দেখবা?😆",
        "quick_replies" => [
            [
                "content_type" => "text",
                "title" => " আচ্ছা দেখাও 😄",
                "payload" => "qr5.1",

            ],
            [
                "content_type" => "text",
                "title" => "না থাক।😅",
                "payload" => "qr4.6",

            ],

        ]
    ];
    //response for qr
    $response = [
        'recipient' => ['id' => $senderId],
        'messaging_type' => 'RESPONSE',
        'message' => $answer,
    ];


}

else if ($quickReplyClick == 'qr5.1')
{
    $accessToken = $GLOBALS["accessToken"];
    $input = $GLOBALS["input"];
    $senderId = $GLOBALS["senderId"];
    $attachment_id2=625819325049860;

    $resp = '{
  "recipient":{
    "id":"' . $senderId . '"
  },
  "message":{
    "attachment":{
      "type":"image", 
      "payload":{
        "attachment_id": "' . $attachment_id2 . '"
      }
    }
  }
}';
$ch = curl_init('https://graph.facebook.com/v8.0/me/messages?access_token=' . $accessToken);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $resp);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
if (!empty($input)) {
 
    $result = curl_exec($ch);
}
curl_close($ch);

//text msg
$answer = 'আচ্ছা আজ আর নয়,পরে কথা হবে।😅😅';
//!--------
//response for text
$response = [
    'recipient' => ['id' => $senderId],
    'message' => ['text' => $answer]
];
//!--------

}



else if ($quickReplyClick == 'qr3.4')
{
    $answer =   [
        "text" => "আচ্ছা বুঝছি তোমার মুড অফ😞",
        "quick_replies" => [
            [
                "content_type" => "text",
                "title" => " হু মুড অফ🥱",
                "payload" => "qr4.3",

            ],
            [
                "content_type" => "text",
                "title" => " আচ্ছা যাও ,শুনাও কবিতা😪 ",
                "payload" => "qr4.4",

            ],

        ]
    ];
    //response for qr
    $response = [
        'recipient' => ['id' => $senderId],
        'messaging_type' => 'RESPONSE',
        'message' => $answer,
    ];
}
else if ($quickReplyClick == 'qr4.3') 
   {

    //text msg
        $answer = 'আচ্ছা কি আর করবা, মুড়ি খাও। পরে কথা হবে।🥺 ';
        //!--------
        //response for text
        $response = [
            'recipient' => ['id' => $senderId],
            'message' => ['text' => $answer]
        ];
        //!--------
    }

else if ($quickReplyClick == 'qr4.6') 
      {

        //text msg
            $answer = 'আচ্ছা আজ আর নয়,পরে কথা হবে।😅😅';
            //!--------
            //response for text
            $response = [
                'recipient' => ['id' => $senderId],
                'message' => ['text' => $answer]
            ];
            //!--------
        }
    
else if ($messageText == 'Ki Koro'||$messageText == 'Ki koro'||$messageText == 'ki koro'||$messageText == 'KI KORO'||$messageText == 'KI koro'||$messageText == 'Ki koro?'||$messageText == 'KI KORO?'||$messageText == 'Ki Koro?'||$messageText == 'ki koro?'||$messageText == 'কি করো?'||$messageText =='কি করো'||$messageText =='কি কর'|| $messageText =='কি কর?' )  
        {   
            //button Message
            $answer = [
                "attachment" =>
                [
                    "type" => "template",
                    "payload" =>
                    [
                        "template_type" => "button",
                        "text" => "তোমার অপেক্ষা করি 😛। চলো আমরা টাংকি মারি 😶।",
                        "buttons" => [
        
                            [
                                "type" => "postback",
                                "title" => "হু, চলো। 😝",
                                "payload" => "button1"
                            ],
                            [
                                "type" => "postback",
                                "title" => "না থাক। 😒",
                                "payload" => "button2"
                            ],
        
        
                        ],
                    ],
                ],
            ];
            $response = [
                'recipient' => ['id' => $senderId],
                'message' => $answer
            ];
        } 
else if ($messageText == 'Valo acho?'||$messageText == 'valo acho?'||$messageText == 'Valo Acho'||$messageText == 'Valo Acho?'||$messageText == 'Valo aso?'||$messageText == 'valo aso?'||$messageText == 'valo aso'||$messageText == 'bhalo aso'||$messageText == 'bhalo aso?'||$messageText == 'ভালো আছো?'||$messageText =='ভালো আছো'||$messageText =='ভালো আছ'|| $messageText =='ভালো আছ?'|| $messageText =='বালো আছ?'|| $messageText =='বালো আছ'|| $messageText =='বালো আছো?'|| $messageText =='বালো আছো' )  
        {   
            //button Message
            $answer = [
                "attachment" =>
                [
                    "type" => "template",
                    "payload" =>
                    [
                        "template_type" => "button",
                        "text" => " অনেক ভালো আছি😁। চলো আমরা টাংকি মারি 😶।",
                        "buttons" => [
        
                            [
                                "type" => "postback",
                                "title" => "হু, চলো। 😝",
                                "payload" => "button1"
                            ],
                            [
                                "type" => "postback",
                                "title" => "না থাক। 😒",
                                "payload" => "button2"
                            ],
        
        
                        ],
                    ],
                ],
            ];
            $response = [
                'recipient' => ['id' => $senderId],
                'message' => $answer
            ];
        } 
else
{
    $answer = [
        "attachment" =>
        [
            "type" => "template",
            "payload" =>
            [
                "template_type" => "button",
                "text" => "উফফফ বুঝলাম না😕। যাই হোক আমি টাংকি BOT 😁। চলো আমরা টাংকি মারি 😶।",
                "buttons" => [

                    [
                        "type" => "postback",
                        "title" => "হু, চলো। 😝",
                        "payload" => "button1"
                    ],
                    [
                        "type" => "postback",
                        "title" => "না থাক। 😒",
                        "payload" => "button2"
                    ],
                ],
            ],
        ],
    ];
    $response = [
        'recipient' => ['id' => $senderId],
        'message' => $answer
    ];


}



//!----------- SENDING THE MESSAGE------------------------

$ch = curl_init('https://graph.facebook.com/v9.0/me/messages?access_token=' . $accessToken);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($response));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

if (!empty($input)) {
    $result = curl_exec($ch);
}
curl_close($ch);
//!----------------------------------------------------------
