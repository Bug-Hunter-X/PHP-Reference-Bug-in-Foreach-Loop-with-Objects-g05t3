# PHP Reference Bug in Foreach Loop

This repository demonstrates a subtle but common error in PHP involving references and object properties within foreach loops.  The `bug.php` file contains the problematic code, which unexpectedly modifies all objects in an array to the final value of a loop variable. The `bugSolution.php` file offers a corrected version.

This bug arises from the use of references (`&$obj`) in the loop, causing all array elements to point to the same object instance.

**To reproduce:**
1. Clone this repository.
2. Run `php bug.php` to see the unexpected behavior.
3. Run `php bugSolution.php` to see the corrected output.

This example highlights the importance of understanding reference semantics in PHP when working with loops and objects.