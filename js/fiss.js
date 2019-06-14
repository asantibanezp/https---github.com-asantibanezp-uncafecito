
var numeros = 100;

for(var i = 1; i <= 100; i++)
{
    if (i%3 == 0) {
        document.write("Fizz "+i);
    }
    else if (i%5 == 0) {
        document.write("Buzz "+i);
    }
    else{
        document.write("FizzBuzz "+i);
    }
    document.write("<br>");
}

