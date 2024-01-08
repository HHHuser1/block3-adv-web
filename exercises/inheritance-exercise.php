<?php 

// # Inheritance

// Note:

// ```
// +public
// -private
// #protected
// ```

// 1. Write a php class called Animal with a method called makeSound(). Create a subclass called Cat that overrides the makeSound() method to bark.


class animal{
    public function makeSound(){
        echo "I am an animal";
    }
}

class cat extends animal{
    public function makeSound() {
        echo "WOOF WOOF";
    }
}

$animal1 = new animal();
$animal2 = new cat();

// echo $animal1->makeSound() . '<br>';
// echo $animal2->makeSound() . '<br>';


// 2. Write a php class called Vehicle with a method called drive(). Create a subclass called Car that overrides the drive() method to print "Repairing a car".


class Vehicle{
    public function drive(){
        echo "I am driving the car";
    }
}

class Car extends vehicle {
    public function drive(){
        echo "Repairing car";
    }
}

$newCar = new Vehicle();
$newCarAtShop = new Car();

// echo $newCar->drive() . '<br>';
// echo $newCarAtShop->drive() . '<br>';



// 3. Write a php class called Shape with a method called getArea(). Create a subclass called Rectangle that overrides the getArea() method to calculate the area of a rectangle.

class Shape{
    public function getArea(){
        echo "area of the shape";
    }
}

class Rectangle extends Shape{
    public function getArea(){

        echo "area of the rectangle";
    }
}

$newShape = new Shape();
$newRectangle = new Rectangle();

// echo $newShape->getArea() . '<br>';
// echo $newRectangle->getArea() . '<br>';



// 4. Write a php class called Employee with methods called work() and getSalary(). Create a subclass called HRManager that overrides the work() method and adds a new method called addEmployee().

class Employee {
    public function work(){
        echo "I am working";
    }
    public function getSalary(){
        echo "I am getting salary";
    }
}

class HRManager extends Employee{
    public function work(){
            echo "I am adding employee";
    }
}

$newEmployee = new Employee();
$newHRManager = new HRManager();

// echo $newEmployee->work() . '<br>';
// echo $newHRManager->work() . '<br>';



// 5. Write a php class known as "BankAccount" with methods called deposit() and withdraw(). Create a subclass called SavingsAccount that overrides the withdraw() method to prevent withdrawals if the account balance falls below one hundred.





// 6. Write a php class called Animal with a method named move(). Create a subclass called Cheetah that overrides the move() method to run.

// 7. Write a php class known as Person with methods called getFirstName() and getLastName(). Create a subclass called Employee that adds a new method named getEmployeeId() and overrides the getLastName() method to include the employee's job title.

// 8. Write a php class called Shape with methods called getPerimeter() and getArea(). Create a subclass called Circle that overrides the getPerimeter() and getArea() methods to calculate the area and perimeter of a circle.

// 9. Write a php cehicle class hierarchy. The base class should be Vehicle, with subclasses Truck, Car and Motorcycle. Each subclass should have properties such as make, model, year, and fuel type. Implement methods for calculating fuel efficiency, distance traveled, and maximum speed.

// 10. Write a php ca class hierarchy for employees of a company. The base class should be Employee, with subclasses Manager, Developer, and Programmer. Each subclass should have properties such as name, address, salary, and job title. Implement methods for calculating bonuses, generating performance reports, and managing projects.









?>