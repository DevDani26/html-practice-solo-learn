#if ARDUINO_USB_MODE
#warning This sketch should be used when USB is in OTG mode
void setup(){}
void loop(){}
#else

#include "USB.h"
#include "USBHIDKeyboard.h"
USBHIDKeyboard Keyboard;

const int buttonPin = 4;          // input pin for pushbutton
int previousButtonState = HIGH;   // for checking the state of a pushButton

void setup() {
  // make the pushButton pin an input:
  pinMode(buttonPin, INPUT_PULLUP);
  // initialize control over the keyboard:
  Keyboard.begin();
  USB.begin();


  delay(2000);

  Keyboard.println("gfdsg$#%$#%$#$#@$#$%^%^^&%^$&^%&%$^#$$#@^%^&&*&*()(*_)(+_()_*()(*&*&^&))");
}

void loop() {
 
}
#endif /* ARDUINO_USB_MODE */