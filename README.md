# CVE2016-5734

Security and Privacy in Computing
Group Project

## Introduction

This is a vulnerability in phpMyAdmin and affects all 4.6.x versions (prior to 4.6.3), 4.4.x versions (prior to 4.4.15.7), and 4.0.x versions (prior to 4.0.10.16). It was published on June 23, 2016 and contributed by Michal Cihar and Cure53. The vulnerability occurs due to an input validation error through unsafe handling of preg_replace parameters. The attack can be executed by passing malicious parameters which allow the execution of PHP code due to the lack of sanitation in phpMyAdmin when using the preg_replace function.

## Installation of Vulnerable Version

Run install_phpmyadmin.sh with root privileges and vulnerable version of phpMyAdmin 4.3.0 will be installed.

## Procedure for Exploiting

Run the sql commands in initial_sql.sql.

Then run exploit*.py to execute the exploit.



