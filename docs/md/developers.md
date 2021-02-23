# Guide for developers

## Development tracking solution
For this purpose, we use [YouTrack](http://awslabspl.myjetbrains.com)

### Rules and `no-go's` on YouTrack
Will be published soon.

## "Rule of three"
If you are working on new functionality, **always** write three **separate** files:
* class ( `.php` extension; placed in `/core/classess` ),
* interface for all members within this class ( `.php` extension; placed in `/core/interfaces` ),
* test ( `.php` extension; placed in `/tests/` )