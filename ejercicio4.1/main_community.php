<?php
// main_community.php
require_once 'CommunityMember.php';

$admin = new Administrator("Laura Ruiz", "laura@uni.edu", "E1001", "Engineering", "Dean");
$teacher = new Teacher("Carlos Pérez", "carlos@uni.edu", "E1002", "Mathematics", ["Algebra", "Calculus"]);
$staff = new Staff("Ana López", "ana@uni.edu", "E1003", "Library Assistant");

$gradStudent = new GraduateStudent("Luis Gómez", "luis@uni.edu", "S2001", "AI in Healthcare");
$freshman = new Freshman("Marta Torres", "marta@uni.edu", "S2002", "Freshman");
$junior = new Junior("Iván Ramírez", "ivan@uni.edu", "S2003", "Junior");

$alumnus = new Alumnus("Rebeca Silva", "rebeca@uni.edu", 2018);

$members = [$admin, $teacher, $staff, $gradStudent, $freshman, $junior, $alumnus];

foreach ($members as $member) {
    echo $member . "\n";
}
