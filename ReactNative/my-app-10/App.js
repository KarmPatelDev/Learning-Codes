import React from 'react';
import { Text, View, Button } from 'react-native';
import AsyncStorage from '@react-native-async-storage/async-storage';

export default function App() {

  const setData = async () => {
    await AsyncStorage.setItem("name", "Karm Patel");
  }

  const getData = async () => {
    const name = AsyncStorage.getItem("name");
    console.warn(name);
  }

  const removeData = async () => {
    await AsyncStorage.removeItem("name");
  }

  return (<>
    {/* Async Storage Use For Store Data Permanently
    Data only removed when we remove it, logout, uninstall, storage and cache removed then and then it remove
    we can access that storage data from any component
    install => npm i @react-native-async-storage/async-storage */}
    
    <View>
      <Text style={{fontSize:30}}>Async Storage</Text>
      <Button title="Set Data" onPress={setData} />
      <Button title="Get Data" onPress={getData} />
      <Button title="Remove Data" onPress={removeData} />
    </View>

    
    {/* 
    Element Inspector => check component,css, network request all like a inspect in chrome 
     => Press ctrl + M and go to control element inspector => click on components all details we can see
    */}


  </>);
}
