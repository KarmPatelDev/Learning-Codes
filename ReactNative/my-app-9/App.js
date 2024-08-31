import React, { useRef } from 'react';
import { StyleSheet, Text, View, Button, TextInput} from 'react-native';

export default function App() {
 
  // Ref is component ReferenceError, it has all properties, it manipulate dom so use least

  const input = useRef();

  const updateInput = () => {
    console.warn("Update");
    input.current.focus(); // it change focus to name field
    input.current.setNativeProps({
      fontSize: 24,
      color: 'red'
    });
  }

  return (<>
   <View>
    <TextInput ref={input} placeholder='Enter Name' style={styles.input} />
    <TextInput placeholder='Enter Password' style={styles.input} />
    <Button title="Update Input" onPress={updateInput}/>
   </View>

   <View>
   
   {/* 1. How To Change Android icon 
   - easyappicon.com
   - ios + adaptive icon
   - zip extract
   - Now go to your project => android => app => main => res => Now Replace This Folder With New Extracted Folders But All Files and Folders must be there that have in previous
   - Now Build Your App

   2. How To Change IOS icon
   - Same as Android But Path is =>
    ios => name_of_you_project => Images.xcassets => AppIcon.appiconset => in that replace or add extreacted folders or Images
   - Now Build Your App */}


   </View>

   </>);
}

const styles = StyleSheet.create({
  input: {
    borderColor: 'skyblue',
    borderWidth: 1,
    padding: 5,
    margin: 5
  }
});
