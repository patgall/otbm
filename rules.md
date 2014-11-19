Development rules
=================

Editing
-------
* 100 caracters per line
* 4 spaces for indent
* camel case method
* feature name in lower case
* doc and comment files in MarkDown

Comments
--------
* multiligne comment above complex function
    /*
    *
    *
    */

Code formating
--------------
* K&R brace style
    int main(int argc, char *argv[])
    {
        ...
        while (x == y) {
            something();
            somethingelse();
     
            if (some_error) {
                do_correct();
            } else {
                continue_as_usual();
            }
        }
     
        finalthing();
        ...
    }
* <?php ?>
* xhtml (lower cased balises)
* css
    div#example_01 {
        padding: 3px;
        margin: 33px;
        width: 333px;
    }
