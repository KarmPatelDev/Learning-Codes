import React from 'react';
import { StyleSheet, Text, View, TextInput, Button } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import { createMaterialTopTabNavigator } from '@react-navigation/material-top-tabs';

export default function App() {
  
  // const Tab = createBottomTabNavigator();
  const Tab = createMaterialTopTabNavigator();
  
  // if trouble occur use => npm start --clean-cache for cache clean 
  // install bottom tab navigation => npm install @react-navigation/bottom-tabs
  // In Bottom navigation we have to click for tab change

  // For top navigation we can click or slide for tab change

  return (
      <>
       
       {/* Bottom and Top Navigation */}
       <NavigationContainer>
        <Tab.Navigator>
          <Tab.Screen name="Login" component={Login} />
          <Tab.Screen name="SignUp" component={Signup} />
        </Tab.Navigator>
       </NavigationContainer>

      </>
  );
}

const Login = () => {
  return (
    <View style={{flex: 1, justifyContent: 'center', alignItems: 'center'}}>
      <Text >Login</Text>
    </View>
  );
}

const Signup = () => {
  return (
    <View style={{flex: 1, justifyContent: 'center', alignItems: 'center'}}>
      <Text>Signup</Text>
    </View>
  );
}