<?php

class CommunityMember {
    protected string $name;
    protected string $email;

    public function __construct(string $name, string $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function __toString(): string {
        return "Name: {$this->name}, Email: {$this->email}";
    }
}

class Employee extends CommunityMember {
    protected string $employeeId;

    public function __construct(string $name, string $email, string $employeeId) {
        parent::__construct($name, $email);
        $this->employeeId = $employeeId;
    }

    public function getEmployeeId(): string {
        return $this->employeeId;
    }

    public function __toString(): string {
        return parent::__toString() . ", Employee ID: {$this->employeeId}";
    }
}

class Faculty extends Employee {
    protected string $department;

    public function __construct(string $name, string $email, string $employeeId, string $department) {
        parent::__construct($name, $email, $employeeId);
        $this->department = $department;
    }

    public function getDepartment(): string {
        return $this->department;
    }

    public function __toString(): string {
        return parent::__toString() . ", Department: {$this->department}";
    }
}

class Administrator extends Faculty {
    protected string $role;

    public function __construct(string $name, string $email, string $employeeId, string $department, string $role) {
        parent::__construct($name, $email, $employeeId, $department);
        $this->role = $role;
    }

    public function getRole(): string {
        return $this->role;
    }

    public function __toString(): string {
        return parent::__toString() . ", Role: {$this->role}";
    }
}

class Teacher extends Faculty {
    protected array $courses;

    public function __construct(string $name, string $email, string $employeeId, string $department, array $courses) {
        parent::__construct($name, $email, $employeeId, $department);
        $this->courses = $courses;
    }

    public function getCourses(): array {
        return $this->courses;
    }

    public function __toString(): string {
        $courseList = implode(", ", $this->courses);
        return parent::__toString() . ", Courses: {$courseList}";
    }
}

class Staff extends Employee {
    protected string $position;

    public function __construct(string $name, string $email, string $employeeId, string $position) {
        parent::__construct($name, $email, $employeeId);
        $this->position = $position;
    }

    public function getPosition(): string {
        return $this->position;
    }

    public function __toString(): string {
        return parent::__toString() . ", Position: {$this->position}";
    }
}

class Student extends CommunityMember {
    protected string $studentId;

    public function __construct(string $name, string $email, string $studentId) {
        parent::__construct($name, $email);
        $this->studentId = $studentId;
    }

    public function getStudentId(): string {
        return $this->studentId;
    }

    public function __toString(): string {
        return parent::__toString() . ", Student ID: {$this->studentId}";
    }
}

class GraduateStudent extends Student {
    protected string $thesisTitle;

    public function __construct(string $name, string $email, string $studentId, string $thesisTitle) {
        parent::__construct($name, $email, $studentId);
        $this->thesisTitle = $thesisTitle;
    }

    public function getThesisTitle(): string {
        return $this->thesisTitle;
    }

    public function __toString(): string {
        return parent::__toString() . ", Thesis Title: {$this->thesisTitle}";
    }
}

class UndergraduateStudent extends Student {
    protected string $level;

    public function __construct(string $name, string $email, string $studentId, string $level) {
        parent::__construct($name, $email, $studentId);
        $this->level = $level;
    }

    public function getLevel(): string {
        return $this->level;
    }

    public function __toString(): string {
        return parent::__toString() . ", Level: {$this->level}";
    }
}

class Freshman extends UndergraduateStudent {}
class Sophomore extends UndergraduateStudent {}
class Junior extends UndergraduateStudent {}
class Senior extends UndergraduateStudent {}

class Alumnus extends CommunityMember {
    protected int $graduationYear;

    public function __construct(string $name, string $email, int $graduationYear) {
        parent::__construct($name, $email);
        $this->graduationYear = $graduationYear;
    }

    public function getGraduationYear(): int {
        return $this->graduationYear;
    }

    public function __toString(): string {
        return parent::__toString() . ", Graduation Year: {$this->graduationYear}";
    }
}
