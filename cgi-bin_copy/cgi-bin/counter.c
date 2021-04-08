#include <stdio.h>

int i=0;

int incrementcount()
{

  i++;
  return i;
}

int main()
{
  printf("Content-type: text/html\n\n");
  printf("The current count is: ");
  printf("%d\n", incrementcount());
  return 0;
}
