import React, { useEffect, useState } from 'react';
import { StyleSheet, Text, View, Button, TextInput, ScrollView} from 'react-native';

export default function App() {

  const [name, setName] = useState("");
  const [age, setAge] = useState(0);
  const [email, setEmail] = useState("");

  const [nameError, setNameError] = useState(false);
  const [ageError, setAgeError] = useState(false);
  const [emailError, setEmailError] = useState(false);


  const [data, setData] = useState([]);

  const [showModal, setShowModal] = useState(false);
  const [selectedUser, setSelectedUser] = useState(undefined);

  const [searchData, setSearchData] = useState([]);

  // add Data 
  const saveFormData = async () => {

    if(!name){setNameError(true);}else{setNameError(false);}
    if(!age){setAgeError(true);}else{setAgeError(false);}
    if(!email){setEmailError(true);}else{setEmailError(false);}
    if(!name || !age || !email)return false;

    const url = ""; // use POST URL And THen Try

    try{
      let result = await fetch(url, {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({
          name: name,
          age: age,
          email: email
        })
      });
      result = await result.json();
      console.warn(result);
    }
    catch(error){
      console.warn(error);
    }
  }

  // get Data
  const getAPIData = async () => {
    const url = "https://jsonplaceholder.typicode.com/posts";
    let result = await fetch(url);
    result = await result.json();
    if(result){
      setData(result);
    }
  };

  // delete Data
  const deleteAPIData = async (id) => {
    const url = "";
    let result = await fetch(`${url}/${id}`, {
      method: "delete"
    });
    result = result.json();
    if(result){
      console.warn("Deleting Successfully...");
      getAPIData();
    }
  }

  // update data before actions
  const updateAPIData = async (data) => {
    setShowModal(true);
    setSelectedUser(data);
  }

  // search data
  const searchUser = async (text) => {
    const url = "";
    let result = await fetch(`${url}?q=${text}`);
    result = await result.json();
    if(result){
      setSearchData(result);
    }
  }

  // first time load
  useEffect(()=>{
    getAPIData();
  }, []);

  return (

    //  For Fake API we use JSON SERVER using => npm install -g json-server 
    //  For Start json server and watch them us => json-server --watch db.json
    //  run command in that folder where db.json present

    //  ipconfig => for ip address 
    //  json-server --host 0.0.0.0 db.json => json server run at ip address
    //  http://10.0.2.2:3000/users => emulator host

    
   <View>
    <TextInput placeholder='Search' style={styles.input} onChangeText={(text) => searchUser(text)}/>

    {/* Searching Data */}
    <ScrollView>
    {
      searchData.length ? <>{
       searchData.map((item)=><View style={{borderColor: 'black', borderWidth: 1, padding: 5}}>
        <Text>Name: {item.name}</Text>
        <Text>Age: {item.age}</Text>
        <Text>Email: {item.email}</Text>
        <View><Button title='EDIT' onPress={()=>updateAPIData(item.id)}/></View>
        <View><Button title='DELETE' onPress={()=>deleteAPIData(item)}/></View>
        </View>)}</> : null
    }
    </ScrollView>

    {/* Add Data */}
    <TextInput placeholder='Enter Your Name' style={styles.input} onChangeText={(text) => setName(text)} />
    {
      nameError ? <Text style={styles.error} >Invalid Name</Text> : null
    }
    <TextInput placeholder='Enter Your Age' style={styles.input} onChangeText={(text) => setAge(text)} />
    {
      ageError ? <Text style={styles.error} >Invalid Age</Text> : null
    }
    <TextInput placeholder='Enter Your Email' style={styles.input} onChangeText={(text) => setEmail(text)} />
    {
      emailError ? <Text style={styles.error} >Invalid Email</Text> : null
    }
    <Button title="Submit" onPress={saveFormData} />


    {/* Print Data */}
    <ScrollView>
    {
      data.length ? <>{
       data.map((item)=><View style={{borderColor: 'black', borderWidth: 1, padding: 5}}>
        <Text>Name: {item.name}</Text>
        <Text>Age: {item.age}</Text>
        <Text>Email: {item.email}</Text>
        <View><Button title='EDIT' onPress={()=>updateAPIData(item.id)}/></View>
        <View><Button title='DELETE' onPress={()=>deleteAPIData(item)}/></View>
        </View>)}</> : null
    }
    </ScrollView>


    {/* Update Data Modal */}
    <Modal visible={showModal} transparent={true}>
    <UserModal setShowModal={setShowModal} selectedUser={selectedUser} getAPIData={getAPIData}/>
    </Modal>

   </View>
   
  );
}

// Update Data 
const UserModal = (props) => {

  const [name, setName] = useState(undefined);
  const [age, setAge] = useState(undefined);
  const [email, setEmail] = useState(undefined);

  useEffect(()=> {
    if(props.selectedUser){
      setName(props.selectedUser.name);
      setAge(props.selectedUser.age.toString());
      setEmail(props.selectedUser.email);
    }
  }, [props.selectedUser])

  const updateUser = async () => {
    const url = "";
    const id = props.selectedUser.id;
    let result = await fetch(`${url}/${id}`, {
      method: "put",
      headers: {
      "Content-Type": "application/json"
      },
      body: JSON.stringify({name, age, email})
    });
    result = await result.json();
    if(result){
      console.warn(result);
      props.getAPIData();
      props.setShowModal(false);
    }

  }

   return(
    <View style={styles.modalView}>
    <View style={styles.modalInnerView}>
      <TextInput placeholder='Enter Your Name' style={styles.input} onChangeText={(text) => setName(text)} value={name}/>
      <TextInput placeholder='Enter Your Age' style={styles.input} onChangeText={(text) => setAge(text)} value={age}/>
      <TextInput placeholder='Enter Your Email' style={styles.input} onChangeText={(text) => setEmail(text)} value={email}/>

      <Button title="Update" onPress={updateUser} />
      <Button title="close" onPress={() => props.setShowModal(false)}/>
    </View>
    </View>
   );
}

const styles = StyleSheet.create({
  input: {
    borderColor: 'skyblue',
    borderWidth: 1,
    padding: 5,
    margin: 5
  },
  error: {
    color: 'red',
    margin: 5
  },
  modalView: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center'
  },
  modalInnerView: {
    backgroundColor: '#fff',
    padding: 20,
    shadowColor: '#000'
  }
});
