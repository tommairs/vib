# VIB

View In Browser functionality for Sparkpost

Takes in a BCC of a message and presents for Web Browser viewing.

Uses a hash of the campaign, email address, and timestamp to provide a UUID to identify a specific message.  

Comes in two parts.
  a) A component that writes a link with the UUID to the message content
  b) A component to store a copy in a Web service for viewing after some time.
  
Arguably a 3rd component is the adminitration tool of the web service that allows you to control how long messages are stored.

