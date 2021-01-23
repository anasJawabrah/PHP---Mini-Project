
<?php 

function showUserPage($userId,$students){
    $index=$userId-1;
    $student=$students[$index];
$userPage='
<div class="row">

    <div class="col s12 m4 l3"> 
    <div class="card #212121 grey darken-4
 darken-1">
    <div class="card-content white-text">
        <div class="card-image">
        <img src="'.$student['image'].'">
        </div>
        <span class="card-title">'.$student['name'].'</span>
        <p>I am a very simple student.</p>
        </div>
        <div class="card-action">
        <p style="color:orange"> Birthday : '.$student['birthday'].'</p>
        
        </div>
    </div>
    
    </div>

    <div class="col s12 m8 l9">
    <div class="card #212121 grey darken-4
 darken-1">
        <div class="card-content  white-text">
        <span class="card-title">Contact me</span>
        </div>
        <div style="color:#fff;" class="card-action">
        <a class="waves-effect #ffb74d orange lighten-2 btn-floating github" href="'.$student['gitHub'].'"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Logo Github</title><path d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9a17.56 17.56 0 003.8.4c8.3 0 11.5-6.1 11.5-11.4 0-5.5-.2-19.9-.3-39.1a102.4 102.4 0 01-22.6 2.7c-43.1 0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8 11.2 19.6 26.2 25.1 39.6 25.1a63 63 0 0025.6-6c2-14.8 7.8-24.9 14.2-30.7-49.7-5.8-102-25.5-102-113.5 0-25.1 8.7-45.6 23-61.6-2.3-5.8-10-29.2 2.2-60.8a18.64 18.64 0 015-.5c8.1 0 26.4 3.1 56.6 24.1a208.21 208.21 0 01112.2 0c30.2-21 48.5-24.1 56.6-24.1a18.64 18.64 0 015 .5c12.2 31.6 4.5 55 2.2 60.8 14.3 16.1 23 36.6 23 61.6 0 88.2-52.4 107.6-102.3 113.3 8 7.1 15.2 21.1 15.2 42.5 0 30.7-.3 55.5-.3 63 0 5.4 3.1 11.5 11.4 11.5a19.35 19.35 0 004-.4C415.9 449.2 480 363.1 480 261.7 480 134.9 379.7 32 256 32z"/></svg></a> 
        '.substr($student['gitHub'],12,40).'
        </div>
        <div style="color:#fff;" class="card-action">
        <a  class="waves-effect #ffb74d orange lighten-2 btn-floating github" href="'.$student['linkedIn'].'"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-linkedin" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <rect x="4" y="4" width="16" height="16" rx="2" />
        <line x1="8" y1="11" x2="8" y2="16" />
        <line x1="8" y1="8" x2="8" y2="8.01" />
        <line x1="12" y1="16" x2="12" y2="11" />
        <path d="M16 16v-3a2 2 0 0 0 -4 0" />
      </svg></a> 
        '.substr($student['linkedIn'],12,40).'
        </div>
        
     </div>

    </div>
</div>
';
return $userPage;
}

function showAttendance($students){

$TableHead='
<table>
        <thead>
        <tr>
            <th>Name</th>
            <th> Check In</th>
            <th>Check Out </th>
        </tr>
        </thead>
        <tbody>
    ';
$tableRows='';


    foreach ($students as $student) {
        $attendance=$student["attendance"];
        $name=$student['name'];
        foreach ($attendance as $date) {
            $strStart =$date["checkIn" ];
            $strEnd =$date["checkOut"];
            // calculate the time diff
            $dteStart = new DateTime($strStart);
            $dteEnd   = new DateTime($strEnd);
    
            $dteDiff  = $dteStart->diff($dteEnd);
            $time= $dteDiff->format("%H");
            $isComplete=(($time+1)>=(8+1));
            $styleColor =(!($isComplete))?"red":"blue";
            // generate the table rows str
            $row='
            <tr style="color:'.$styleColor.'">
                <td>'.$name.'</td>
                <td>'.$strStart.'</td>
                <td>'.$strEnd.'</td>
            </tr>
            ';
            $tableRows.=$row;
    
        }
    }


$tableEnd='
    </tbody>
</table>';

$table=$TableHead.$tableRows.$tableEnd;
return $table;
}
function showDashboard($students){

$TableHead='
<table>
        <thead>
        <tr>
            <th style="text-align:center;">Id</th>
            <th style="text-align:center;">Name</th>
            <th style="text-align:center;">Number Of Completed Projects </th>
        </tr>
        </thead>
        <tbody>
    ';
$tableRows='';

    function isComplete($projects)   
    {
        return $projects['isCompleted'];
    }

    $totalNumberOfOfCompletedProjects=0;
    foreach ($students as $student) {
        

        $attendance=$student["attendance"];
        $name=$student['name'];
        $id=$student['id'];
        $completedProjectArray=array_filter($student['projects'],"isComplete");

        $numberOfCompletedProjects=count($completedProjectArray);

        $totalNumberOfOfCompletedProjects+=$numberOfCompletedProjects;

            $row='
            <tr style="text-align:center;">
                <td style="text-align:center;">'.$id.'</td>
                <td style="text-align:center;">'.$name.'</td>
                <td style="text-align:center;">'.$numberOfCompletedProjects.'</td>
            </tr>
            ';
            $tableRows.=$row;
    
        
    }
    $tableEndBody='
    </tbody>
';
$tableFooter='
        <tfoot>

            <tr style="text-align:center;">
                <td style="text-align:center;">Total</td>
                <td style="text-align:center;">'.$id.' students</td>
                <td style="text-align:center;">'.$totalNumberOfOfCompletedProjects.' completed projects</td>
            </tr>
        </tfoot>
        </table>';


$table=$TableHead.$tableRows.$tableEndBody.$tableFooter;
return $table;
}

?>
