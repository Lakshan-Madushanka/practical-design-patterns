# Practical Design Patterns

This repository contains real-world examples of design patterns written in PHP on the Laravel framework.

The most difficult thing is to identify the ideal situation to use a design pattern lack of real-world examples is one of the main reasons for that.

These practical design pattern examples guide you to get a better understanding of when and why we should use a design pattern.

As a footnote, Use a design pattern if only an ideal scenario then it will clarify your codebase otherwise it may make your codebase more dirty :)

## Installation

### Standard
 1) Install dependencies using command ```composer install```
 2)  Run ```php artisan serve``` command.

### Docker 

Run command ```docker-compose up --build```

## Prerequisites
Some knowledge of design patterns would be helpful.

## Structure

* All the patterns are in the patterns folder with corresponding names. As an example, strategy patterns are in the "app/Patterns/Strategy directory". 

* Each pattern has its route and controller. The strategy pattern controller is "\app\Http\Controllers\Patterns\Behavioral\StrategyPatternController".

* ```php artisan route:list --except-vendor``` command displays all end points available.

* To test strategy pattern example of validator run behavioral/strategy/validator end point in your browser.

## Patterns

### Behavioral

* **[Strategy](https://github.com/Lakshan-Madushanka/practical-design-patterns/tree/main/app/Patterns/Behavioral/Strategy)**
  * [Validator](https://github.com/Lakshan-Madushanka/practical-design-patterns/tree/main/app/Patterns/Behavioral/Strategy/Validator)
