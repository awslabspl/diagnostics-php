# Guide for developers

## "Rule of three"
If you are working on new functionality, **always** write three **separate** files:
* class ( `.php` extension; placed in `/core/classess` ),
* interface for all members within this class ( `.php` extension; placed in `/core/interfaces` ),
* test ( `.php` extension; placed in `/tests/` )