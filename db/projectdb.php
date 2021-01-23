<?php 

$names=['maya','sami','hana','sadem','maher','sameh','rami','kandy','akane','sasha'];

$birthday=['13 Jan ','5 March','2 April'];

$images=[
    "https://images.generated.photos/PQTNq_cZ1WfqYA9vfqCkIGPbcafjREQ2htbnN1zkisA/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Ry/YW5zcGFyZW50X3Yy/L3YyXzA0NzU4ODgu/cG5n.png",
    "https://images.generated.photos/kBwn8DKLbbf5sii4cP6045vzBPt6iCsBpYZHNdONhhk/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Ry/YW5zcGFyZW50X3Yy/L3YyXzAxMTcxMzgu/cG5n.png",
    "https://images.generated.photos/16eDjpQP9E3-a3sFP6Cv6qOfhDAAp2pzXZQb1wiX3u4/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Ry/YW5zcGFyZW50X3Yy/L3YyXzA5NjY3ODQu/cG5n.png",
    "https://images.generated.photos/_DN1eZD2cabD9xs5WiJ8aDkHyfhT-T6VNXgEu7FONSo/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Ry/YW5zcGFyZW50X3Yy/L3YyXzA5NTUxMDAu/cG5n.png",
    "https://images.generated.photos/oGD9g84pyrKYi2uRGsTKmrqXOOFaikSVJE9ekbEWz_U/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Ry/YW5zcGFyZW50X3Yy/L3YyXzAxMjgzMzUu/cG5n.png",
    "https://images.generated.photos/uo4QUZECFExgbZbF_BQ9RHMC_ozbgWrCAePHhEAyO30/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Ry/YW5zcGFyZW50X3Yy/L3YyXzA5ODY5MTYu/cG5n.png",
    "https://images.generated.photos/4xk7Wc03RPLXJgqi41I39v3T7aa8PmGRh7QSy85KKqw/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Ry/YW5zcGFyZW50X3Yy/L3YyXzA0Njc4MzUu/cG5n.png",
    "https://images.generated.photos/DZ3Vd2_W6SYHJG2NvNXTDmXgXXonPumUBB8cCP4Tz4Q/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Ry/YW5zcGFyZW50X3Yz/L3YzXzA5NDg1NDFf/MDgxMTg3Ml8wOTYz/OTY0LnBuZw.png"
    ,
    "https://images.generated.photos/5VC1iz4QEUNMUNLsucPitaHwHL3f5fRCwfIqgW0epxI/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Ry/YW5zcGFyZW50X3Yz/L3YzXzA2OTIzNzNf/MDc2MzA3NF8wOTYz/OTY0LnBuZw.png",
    "https://images.generated.photos/nudV1xh8kM2YV7tk8rVf_ahpeacJ2xlaKOkhZ9V32WY/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Ry/YW5zcGFyZW50X3Yz/L3YzXzAxODc0NTZf/MDI5MjI2MF8wNjA0/MjQxLnBuZw.png"
];

$projects=[
    [
    "projectName"=>"HTML and CSS",
    "isCompleted"=>true,
    ],
    [
    "projectName"=>"WordPress",
    "isCompleted"=>false,
    ],
    [
    "projectName"=>"Dynamic website",
    "isCompleted"=>true,
    ],
    [
        "projectName"=>"React Dynamic website",
        "isCompleted"=>false,
    ],
    [
        "projectName"=>"php Dynamic website",
        "isCompleted"=>false,
    ],
    
];

$attendance=[
    Array(
"checkIn" =>"15 dec 2020 09:00",
"checkOut" => "15 dec 2020 16:00",
),
    Array(
"checkIn" =>"14 dec 2020 08:00",
"checkOut" => "14 dec 2020 18:00",
    ),
    Array(
"checkIn" =>"3 dec 2020 08:00",
"checkOut" => "3 dec 2020 18:00",
    ),
    Array(
"checkIn" =>"5 dec 2020 08:00",
"checkOut" => "5 dec 2020 14:00",
    ),
    Array(
"checkIn" =>"1 dec 2020 08:00",
"checkOut" => "1 dec 2020 19:00",
    ),
];
echo '<pre>';

$students=[];

foreach ($names as $index => $name) {
    $tempList=[];
    $tempList["id"]=$index+1;
    $tempList["name"]= ucfirst($name);


    $tempList["linkedIn"]="https://www.linkedin.com/in//$name";

    $tempList["gitHub"]="https://www.github.com/$name";

    $tempList["image"]=$images[$index];

    $tempList["birthday"]=$birthday[array_rand($birthday)];

    shuffle($projects);
    $tempList["projects"]=
    
    [
    $projects[0],
    $projects[1]

    ];

    shuffle($attendance);
    $tempList["attendance"]=
    [
    $attendance[0],
    $attendance[1],
    ];
    


    //push to main array
    array_push($students,$tempList);
}



?>