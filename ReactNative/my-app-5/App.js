import React, { useState } from "react";
import {StyleSheet, Text, View, Button, TextInput} from 'react-native';
import {NavigationContainer} from '@react-navigation/native';
import {createNativeStackNavigator} from '@react-navigation/native-stack';
import {WebView} from 'react-native-webview';

export default app = () => {

  const Stack = createNativeStackNavigator();

  const buttonPress = () => {
    console.warn("Button Pressed");
  }

  return (<>
      {/* 
      It is for open website in mobile
      <WebView source={{uri:"https://www.amazon.com/"}} /> 
      */}


      {/* 
       Navigation => one page to another page transfer
       1 -> State Navigation => Login Form other
       2 -> Drawer Navigation => Slider
       3 -> Tab Navigation => Tabs like a newspaper apps  
       
       Run Command in cmd
       npm install @react-navigation/native

       npx expo install react-native-screens react-native-safe-area-context
       or
       npm install react-native-screens react-native-safe-area-context
       
       and Navigation Type It's own command like
       Stack -> npm install @react-navigation/native-stack
       */}

      <NavigationContainer>
         {/* screenOption use for all screen it is in Navigator */}
        <Stack.Navigator screenOptions={{
            headerStyle: {
              backgroundColor: 'skyblue',
            },
            headerTitleStyle:{
              fontSize: 30,
            },
            headerTintColor: 'orange'
          }}>

            {/* option use for perticular screen */}
          <Stack.Screen name="Login" component={Login} 
          options={{
            title:"User Login",
            headerTitle: (props) => <><Button title="left" onPress={buttonPress} /><Text>User</Text></>,
            headerRight: (props) => <HeaderMenu />,
            headerStyle: {
              backgroundColor: 'yellow',
            }
          }}
          />

          <Stack.Screen name="Home" component={Home} />

        </Stack.Navigator>
      </NavigationContainer>
  </>);
}

const Login = (props) => {
  const [name, setName] = useState("");
  const [age, setAge] = useState(0);

  return(
    <View style={{flex: 1, justifyContent: 'center', alignItems: 'center'}}>
      <Text style={{fontSize:30}}>Login Page</Text>
      <TextInput placeholder="Enter Your Name: " style={{fontSize:30, borderWidth: 2, borderColor:'black'}} onChangeText={(text) => setName(text)} />
      <TextInput placeholder="Enter Your Age: " style={{fontSize:30, borderWidth: 2, borderColor:'black'}} onChangeText={(text) => setAge(text)} />
      <Button title="Home Page" onPress={()=>props.navigation.navigate("Home", {
        name,
        age,
      })} />
    </View>
  );
}

const Home = (props) => {
  console.warn(props.route.params);
  const {name, age} = props.route.params;
  return(
    <View style={{flex: 1, justifyContent: 'center', alignItems: 'center'}}>
      <Text style={{fontSize:30}}>Home Page</Text>
      <Text style={{fontSize:30}}>{name}</Text>
      <Text style={{fontSize:30}}>{age}</Text>
    </View>
  )
}

const HeaderMenu = () => {
  return (
    <>
    <Text>Home</Text>
    <Text>About Us</Text>
    <Text>Contact Us</Text>
    </>
  )
}