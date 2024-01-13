import pyttsx3
import speech_recognition as sr
import datetime
import os
import time
import requests
import shutil
import pyjokes
import wikipedia



engine = pyttsx3.init()


def speak(audio):
    engine.say(audio)
    engine.runAndWait()
    
def greet():
    hour = int(datetime.datetime.now().hour)
    if hour>= 0 and hour<12:
        speak("Good Morning !")
  
    elif hour>= 12 and hour<18:
       speak("Good Afternoon !")  
  
    else:
        speak("Good Evening !") 
  
 
 
def takeCommand():
     
    r = sr.Recognizer()
     
    with sr.Microphone() as source:
         
        print("Listening...")
        r.pause_threshold = 1
        audio = r.listen(source, phrase_time_limit=5)
  
    try:
        print("Recognizing...")   
        query = r.recognize_google(audio, language ='en-US')
        print(f"User said: {query}\n")
  
    except Exception as e:
        print(e)   
        print("Unable to Recognize your voice.") 
        return "None"
     
    return query


def wakeWord(text):
    wake = ["alexa"] 
    text = text.lower()  # Convert the text to all lower case words
  # Check to see if the users command/text contains a wake word    
    for phrase in wake:
        if phrase in text:
            return True
  # If the wake word was not found return false
    return False


    
def lib():
    query = takeCommand().lower()
    str = ""
    
    if 'vision' in query:        
        speak("iCATS-UC vision is to be an examplary educational institution of choice, producing future ready graduates")
        print("iCATS-UC vision is to be an examplary educational institution of choice, producing future ready graduates")
        
    elif 'mission' in query:        
         speak("iCATS-UC mission is to inculcate students with critical skills, intellect resourcefulness")
         print("iCATS-UC mission is to inculcate students with critical skills, intellect resourcefulness")
                     
    elif 'joke' in query:         
         speak(pyjokes.get_joke())
                        
    elif 'wikipedia' in query:
         speak('Searching Wikipedia...')
         query = query.replace("wikipedia", "")
         results = wikipedia.summary(query, sentences = 3)
         speak("According to Wikipedia")
         print(results)
         speak(results)
    
    elif 'program' in query or 'programs' in query:
        speak("iCATS-UC offers numerous programs including engineering, computing, business, accounting, plantation, agrotechnology, hospitality, and foundation programs too")
        print("iCATS-UC offers numerous programs including engineering, computing, business, accounting, plantation, agrotechnology, hospitality, and foundation programs too")
                    
    elif 'choose' in query:
        speak("first reason, iCATS-UC has strong industry support because it has more than 65 member companies")
        speak("second reason, MyQuest ranking of iCATS-UC has excellent teaching and learning facilities")
        speak("third reason, iCATS-UC has certified and recognised courses")
        speak("fourth reason, iCATS-UC has a 92 percent student employment rate after completion")
        speak("nevertherless, iCATS-UC just recently won the BrandLaureate SMEs BestBrand Awards 2023 for excellent technical skills education")
        print("first reason, iCATS-UC has strong industry support because it has more than 65 member companies")
        print("second reason, MyQuest ranking of iCATS-UC has excellent teaching and learning facilities")
        print("third reason, iCATS-UC has certified and recognised courses")
        print("fourth reason, iCATS-UC has a 92 percent student employment rate after completion")
        print("nevertherless, iCATS-UC just recently won the BrandLaureate SMEs BestBrand Awards 2023 for excellent technical skills education")
    
    
    elif "stop" in query:
         speak("for how much time you want to stop mirror from listening commands")
         a = int(takeCommand())
         time.sleep(a)
         print(a)
                 
                 
      
if __name__=='__main__':   
    
    greet()
    while True:
        text = takeCommand()
        
        if wakeWord(text) == True:
            print("Voice input heard")
            speak("How may i help you")
            lib()
        
           
                    
                 
    
