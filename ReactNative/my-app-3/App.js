import react, { useEffect, useState } from 'react';
import { StyleSheet, Text, View, Button } from 'react-native';

export default function App() {

  const [count, setCount] = useState(0);
  const [count2, setCount2] = useState(0);

  // if any updation, load, state prop change => automatic it called
  // usage => api, login
  // useEffect(() => {
  //   console.warn("Hello");
  // });

  //it call useEffect only mounting phase(load) means componentDidMount
  // useEffect(() => {
  //   console.warn("Hello");
  // }, []);

  //it call useEffect only for specific states update means componentDidUpdate also it run first time loaded automatically
  useEffect(() => {
    console.warn(count, count2);
  }, [count]);
  useEffect(() => {
    console.warn(count, count2);
  }, [count2]);
  // we can use for both at once or many but we avoid because it can not make logical condition perfect
  // useEffect(() => {
  //   console.warn(count, count2);
  // }, [count, count2]);

  //Toggle, Hide and Show, UnMount The State
  const [show, setShow] = useState(true);

  return (
    <View>
      
      {/* 
      LifeCycle Phase : Mounting, Update, UnMounting 
      when use: first time render, update with state, update with props, ON Error, Component unmount
      - component has life cycle method
      - we can use in function component also
      */}

      {/* 
      Hooks are a new addition in React 16.8. Now we can use State, Hook and other React features without writing class
      Hook identity => "use" keyword 
      Usage: state, life cycle method, contextAPI, Ref and Memo etc. 
      We can make custom hooks 
      */}


      {/* 
      useEffect Hook 
      - only one is there for all life cycle methods
      - Only for function component we can use useEffect
      */}
      <Text style={{fontSize: 30, color: 'red'}}>{count}</Text>
      <Button title="Upadate Count" onPress={()=>setCount(2)} />
      <Button title="Update Count" onPress={()=>setCount(count+1)} />
      <Button title="Update Count2" onPress={()=>setCount2(count2+1)} />
      
      <User info={{count, count2}}/>

      {/* Toggle, Show and Hide */}
      <Button title="Show Component" onPress={() => setShow(true)} />
      <Button title="Hide Component" onPress={() => setShow(false)} />
      <Button title="Toggle Component" onPress={() => setShow(!show)} />
      {
        show == true ? <Student/> : null
      }

    </View>
  );
}


const User = (props) => {

  useEffect(()=> {
    console.warn("Count2 Prop is Updated")
  }, [props.info.count2]);

  return(
    <View>
      <Text>{props.info.count} {props.info.count2}</Text>
    </View>
  );
}

const Student = () => {
  let timer = setInterval(()=>{
    console.warn("Timer Called")
  }, 2000);
  //it call useEffect only unmounting phase means componentDidUnmount
  useEffect(()=>{
    return ()=>clearInterval(timer)
  });

  return(
    <View>
      <Text style={{color: "red", fontSize: 30}}>Student</Text>
    </View>
  );
}
