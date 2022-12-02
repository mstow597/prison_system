<?php include 'database.php'; ?>
<?php

$datePastVisit = NULL;
$dateFutureVisit = NULL;

function visitDayLimit($securityLevel)
{
    //assuming 30 day month
    if ($securityLevel == 'low') {
        return 7;

    } elseif ($securityLevel == 'medium') {
        return 30;

    } else {
        return 180;

    }

}


// High Security Prisoner - 26
// 1st Test
// Just past fail 
$prisonerID = 26;
$visitorID = 5;
$requestedDate = "2022-11-18";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == false) echo "Passed 1st Test";
else echo "Failed 1st Test";

// 2nd Test
// Just past pass
$prisonerID = 26;
$visitorID = 5;
$requestedDate = "2024-10-31";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == true) echo "Passed 2nd Test";
else echo "Failed 2nd Test";

// 3rd Test
// BFP left fail
$prisonerID = 26;
$visitorID = 5;
$requestedDate = "2022-11-30";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == false) echo "Passed 3rd Test";
else echo "Failed 3rd Test";

// 4th Test
// BFP right fail
$prisonerID = 26;
$visitorID = 5;
$requestedDate = "2024-10-30";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == false) echo "Passed 4th Test";
else echo "Failed 4th Test";

// 5th Test
// BFP pass
$prisonerID = 26;
$visitorID = 5;
$requestedDate = "2023-07-31";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == true) echo "Passed 5th Test";
else echo "Failed 5th Test";

// High Security Prisoner - 27
// 6th Test
// Just future fail
$prisonerID = 27;
$visitorID = 5;
$requestedDate = "2024-12-25";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == false) echo "Passed 6th Test";
else echo "Failed 6th Test";

// 7th Test
// Just future pass
$prisonerID = 27;
$visitorID = 5;
$requestedDate = "2023-06-01";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == true) echo "Passed 7th Test";
else echo "Failed 7th Test";


// Medium Security Prisoner - 28
// 8th Test
// Just past fail 
$prisonerID = 28;
$visitorID = 5;
$requestedDate = "2022-11-18";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == false) echo "Passed 8th Test";
else echo "Failed 8th Test";

// 9th Test
// Just past pass
$prisonerID = 28;
$visitorID = 5;
$requestedDate = "2024-10-31";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == true) echo "Passed 9th Test";
else echo "Failed 9th Test";

// 10th
// BFP left fail
$prisonerID = 28;
$visitorID = 5;
$requestedDate = "2022-11-18";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == false) echo "Passed 10th Test";
else echo "Failed 10th Test";

// 11th
// BFP right fail
$prisonerID = 28;
$visitorID = 5;
$requestedDate = "2024-10-30";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == false) echo "Passed 11th Test";
else echo "Failed 11th Test";

// 12th
// BFP pass
$prisonerID = 28;
$visitorID = 5;
$requestedDate = "2023-07-31";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == true) echo "Passed 12th Test";
else echo "Failed 12th Test";

// Medium Security Prisoner - 29
// 13th
// Just future fail
$prisonerID = 29;
$visitorID = 5;
$requestedDate = "2024-12-25";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == false) echo "Passed 13th Test";
else echo "Failed 13th Test";

// 14th
// Just future pass
$prisonerID = 29;
$visitorID = 5;
$requestedDate = "2023-06-01";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == true) echo "Passed 14th Test";
else echo "Failed 14th Test";

// Low Security Prisoner - 36
// 15th
// Just past fail 
$prisonerID = 36;
$visitorID = 5;
$requestedDate = "2022-11-18";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == false) echo "Passed 15th Test";
else echo "Failed 15th Test";

// 16th
// Just past pass
$prisonerID = 36;
$visitorID = 5;
$requestedDate = "2023-03-15";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == true) echo "Passed 16th Test";
else echo "Failed 16th Test";

// 17th
// BFP left fail
$prisonerID = 36;
$visitorID = 5;
$requestedDate = "2022-11-18";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == false) echo "Passed 17th Test";
else echo "Failed 17th Test";

// 18th
// BFP right fail
$prisonerID = 36;
$visitorID = 5;
$requestedDate = "2023-03-14";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == false) echo "Passed 18th Test";
else echo "Failed 18th Test";

// 19th
// BFP pass
$prisonerID = 36;
$visitorID = 5;
$requestedDate = "2022-12-15";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == true) echo "Passed 19th Test";
else echo "Failed 19th Test";

// Low Security Prisoner - 37
// 20th
// Just future fail
$prisonerID = 37;
$visitorID = 5;
$requestedDate = "2024-12-31";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == false) echo "Passed 20th Test";
else echo "Failed 20th Test";

// 21st
// Just future pass
$prisonerID = 37;
$visitorID = 5;
$requestedDate = "2023-06-01";

$result = testfunction($conn, $prisonerID, $visitorID, $requestedDate);
if ($result == true) echo "Passed 21st Test";
else echo "Failed 21st Test";

function testfunction($conn, $prisonerID, $visitorID, $requestedDate) {

    $lookupPastVisit = "SELECT visit_date FROM visits WHERE prisoner_id = $prisonerID AND visited = 1 ORDER BY visit_date DESC LIMIT 1";

    $pastVisitResult = $conn->query($lookupPastVisit);

    if ($pastVisitResult->num_rows != 0) {
        $pastVisitResult = implode(" ", $pastVisitResult->fetch_assoc());
        $datePastVisit = date_create($pastVisitResult);
    } 
    else echo "past visit is non existent <br>" ;

    $lookupSecurity = "SELECT security_level FROM prisoner WHERE prisoner_id = $prisonerID ";
    $securityLevel = $conn->query($lookupSecurity);
    $securityDateRangeDays = visitDayLimit($securityLevel);


    $lookupFutureVisit = "SELECT visit_date FROM visits WHERE prisoner_id = $prisonerID AND visit_date >= '$requestedDate' ORDER BY visit_date LIMIT 1";
    $futureVisitResult = $conn->query($lookupFutureVisit);

    if ($futureVisitResult->num_rows != 0) {
        $futureVisitResult = implode(" ", $futureVisitResult->fetch_assoc());
        $dateFutureVisit = date_create($futureVisitResult);
    } 
    else echo "future visit is nonexistent";
        


    echo gettype($futureVisitResult) . "<br> <br>";



    $requestedDate = date_create($requestedDate);
    $requestedDateString = $requestedDate->format('Y-m-d');
    $insertQuery = "INSERT INTO visits (visit_date, visited, visitor_id, prisoner_id) VALUES ($requestedDateString , 0, $visitorID, $prisonerID)";

    if ($datePastVisit && $dateFutureVisit) {

        $pastDateDiff = date_diff($datePastVisit, $requestedDate);
        $futureDateDiff = date_diff($requestedDate, $dateFutureVisit);
        if ($pastDateDiff->days >= $securityDateRangeDays && $futureDateDiff->days >= $securityDateRangeDays) {
            $insertResult = $conn->query($insertQuery);
            return true;
        } 
        else return false;        
    } 
    elseif ($datePastVisit && !$dateFutureVisit) {
        $pastDateDiff = date_diff($datePastVisit, $requestedDate);

        if ($pastDateDiff->days >= $securityDateRangeDays) {
            $insertResult = $conn->query($insertQuery);
            return true;
        } 
        else return false;
    } 
    elseif (!$datePastVisit && $dateFutureVisit) {
        $futureDateDiff = date_diff($requestedDate, $dateFutureVisit);
        if ($futureDateDiff->days >= $securityDateRangeDays) {
            $insertResult = $conn->query($insertQuery);
            return true;
        } 
        else return false;
        
    } 
    else echo "else triggered - unexpected error";

}

?>