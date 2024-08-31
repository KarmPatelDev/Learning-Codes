import React, { useState } from 'react';
import { Text, View, Button, StyleSheet, TextInput, FlatList, ScrollView, SectionList } from 'react-native';
import CompanyData from './components/CompanyData';
import ExStyle from './css/style';

//jsx
// const name = "Karm";
// const age = 20;
// const fruit = () => {
//   return "Banana";
// }

export default function App() {

  //jsx
  // const email = "karm@gmail.com";

  //button event
  // const fruit2 = () => {
  //   console.warn("Function is Called");
  // }
  // const fruit3 = (val) => {
  //   console.warn(val);
  // }

  //state
  // let data = 10;
  // const [name, setName] = useState("Karm");
  // const testState = () => {
  //   setName("Karm Patel");
  //   data = 30;
  // }

  // Text Input and Forms
  // const [name, setName] = useState("");
  // const [email, setEmail] = useState("");
  // const [password, setPassword] = useState("");
  // const [display, setDisplay] = useState(false);
  // const resetFormData = () => {
  //   setName("");setEmail("");setPassword("");setDisplay(false);
  // }

  // FlatList, List with Map, Grid, ComponentList with Flatlist
  const users = [
    {
      id: 1,
      name: "Karm"
    },
    {
      id: 2,
      name: "Sam"
    },
    {
      id: 3,
      name: "Peter"
    },
    {
      id: 4,
      name: "Bruse"
    },
    {
      id: 1,
      name: "Karm"
    },
    {
      id: 2,
      name: "Sam"
    },
    {
      id: 3,
      name: "Peter"
    },
    {
      id: 4,
      name: "Bruse"
    },
    {
      id: 1,
      name: "Karm"
    },
    {
      id: 2,
      name: "Sam"
    },
    {
      id: 3,
      name: "Peter"
    },
    {
      id: 4,
      name: "Bruse"
    },
    {
      id: 1,
      name: "Karm"
    },
    {
      id: 2,
      name: "Sam"
    },
    {
      id: 3,
      name: "Peter"
    },
    {
      id: 4,
      name: "Bruse"
    },{
      id: 4,
      name: "Bruse"
    },
    {
      id: 1,
      name: "Karm"
    },
    {
      id: 2,
      name: "Sam"
    },
    {
      id: 3,
      name: "Peter"
    },
    {
      id: 4,
      name: "Bruse"
    }
  ]

  // SectionList
  const employees = [
    {
      id: 1,
      name: 'Anil',
      data: ["PHP", "Laravel", "Angular"]  // use data name only
    },
    {
      id: 2,
      name: 'Peter',
      data: ["HTML", "CSS", "JS"]  // use data name only
    },
    {
      id: 3,
      name: 'Bruse',
      data: ["C", "C++"]  // use data name only
    },
    {
      id: 4,
      name: 'Jonny',
      data: ["React", "NodeJS", "Express", "MonoDB"]  // use data name only
    }
  ]

  return (
      <View> 

      {/* View is component for wrapping */}
      {/* For JSX 
      <Text style={{fontSize:30}}>{name}</Text>
      <Text style={{fontSize:30}}>{age}</Text>
      <Text style={{fontSize:30}}>{email}</Text>
      <Text style={{fontSize:30}}>{fruit()}</Text>
      <Text style={{fontSize:30}}>{100*20}</Text>
      <Text style={{fontSize:30}}>{age===36?"Above 30":"Unknown"}</Text>
      <Button title="Press Here"></Button> 
      */}


      {/* components */}
      {/* <UserData/>
      <UserData/>
      <CompanyData/>
      <CompanyData/> */}


      {/* Button Press Event */}
      {/* <Text style={{fontSize:30}}>{data}</Text>
      <Button title="On Press" onPress={fruit2} color={'orange'}/> */}
      {/* <Button title="On Press" onPress={fruit2()} color={'green'}/> it is automatic call because it is not perfect bind so use below we can also pass parameters in that */}
      {/* <Button title="On Press" onPress={() => fruit2()} color={'white'}/>
      <Button title="On Press" onPress={() => fruit3("Hello World")} color={'green'}/> */}


      {/* state => when state update then component automatic render but when variable change component not render so data not update => state data can't share with other component*/}
      {/* <Text style={{fontSize:30}}>{name} {data}</Text>
      <Button title="Update Name" onPress={testState}/> */}


      {/* Props => Parent to Child Data Go, When prop update then also it automatic render*/}
      {/* <Button title="Update Name" onPress={() => setName("Karm Patel")}/>
      <UserData2 name={name} age={29}/>*/}


      {/* Style */}
      {/* <Text style={{fontSize:30, color:'red'}}>Inline Style</Text>
      <Text style={style.textBox}>Internal Style</Text>
      <Text style={ExStyle.textBoxExt}>External Style</Text>
      <Text style={[ExStyle.textBoxExt, style.textBox, {marginTop: 20}]}>Combine All Styles</Text> */}

      {/* Text Input */}
      {/* <Text style={{ fontSize: 30 }}>Handle Text Input</Text>
      <Text style={{ fontSize: 30 }}>Enter Your Name: {name}</Text>
      <TextInput style={styleInput.textInput} placeholder='Enter Your Name' value={name} onChangeText={(text) => setName(text)}/>
      <Button title="Clear Input Value" onPress={() => setName('')} /> */}

      {/* Form */}
      {/* <Text style={{ fontSize: 30 }}>Simple Form</Text>
      <TextInput style={ styleInput.textInput } placeholder='Enter Your Name' onChangeText={(text) => setName(text)} value={name} />
      <TextInput style={styleInput.textInput} placeholder='Enter Your Email' onChangeText={(text) => setEmail(text)} value={email} />
      <TextInput style={styleInput.textInput} placeholder='Enter Your Password' secureTextEntry={true}  onChangeText={(text) => setPassword(text)} value={password} />
      <View style={{ marginBottom: 10 }}><Button color={"green"} title="Print Details" onPress={() => setDisplay(true)}/></View>
      <Button title="Clear Details" onPress={resetFormData}/>
        {
          display?
            <View>
            <Text style={{ fontSize: 20 }}>Username: {name} </Text>
            <Text style={{ fontSize: 20 }}>Email: {email} </Text>
            <Text style={{ fontSize: 20 }}>Password: {password} </Text>
            </View>:null
        } */}

      {/* FlatList => use item variable not other, it has many features header and footer, efficient for big list, lazy loading can apply */}
      {/* <FlatList data={users} renderItem={({item}) => <Text style={styleInput.item}>{item.id} {item.name}</Text>} keyExtractor={item => item.id}/> */}

      {/* List with Map => easy to use, style can apply easily */}
      {/* <ScrollView style={{marginBottom: 30}}>
      {
        users.map((item) => <Text style={styleInput.item}>{item.id} {item.name}</Text>)
      }
      </ScrollView> */}

      {/* Grid */}
      {/* <View style={{ flex: 1, flexDirection: 'row', flexWrap: 'wrap'}}>
      <ScrollView style={{ marginBottom: 30 }}>
        {
          users.map((item) => <Text style={styleInput.item}>{item.name}</Text>)
        }
      </ScrollView>
      </View> */}

      {/* Component in Loop using FlatList */}
      {/* <FlatList data={users} renderItem={({item})=><CompFlatUsers item={item} />} /> */}

      {/* Section List => for nested list it has by default features*/}
      {/* <SectionList
        sections={employees}
        renderItem={({item})=><Text>{item}</Text>}
        renderSectionHeader={({section:{name}})=>(<Text style={{fontSize:30, color:'red'}}>{name}</Text>)}
      /> */}
      
      </View> 
  );
}

//component
// const UserData = () => {
//   return(
//     <View>
//       <Text style={{fontSize:30}}>{name}</Text>
//       <Text style={{fontSize:30}}>{age}</Text>
//       <Button title="Press Here"></Button> 
//     </View>
//   )
// }

//props
// const  UserData2 = (props) => {
//   console.warn(props);
//   return(
//     <View style={{backgroundColor:'green', padding:5}}>
//       <Text style={{fontSize:30}}>Child Component {props.name} {props.age}</Text>
//     </View>
//   )
// }

//Component list with flatlist
const CompFlatUsers = (props) => {
  const item = props.item;
  return (
    <View style={styleInput.compflatlistbox}>
        <Text style={styleInput.compflatitem}>{item.id}</Text>
        <Text style={styleInput.compflatitem}>{item.name}</Text>
    </View>
  );
}

// input style, Forms, Grid Method, component list with flat list
const styleInput = StyleSheet.create({
  textBox: {
    color: 'blue',
    fontSize: 30,
    backgroundColor: 'lightblue',
    marginBottom: 10,
    padding: 4,
    borderRadius: 10,
    textAlignVertical: 'center',
    textAlign: 'center',
    borderColor: 'black',
    borderWidth: 2
  },
  textInput: {
    fontSize:18, 
    borderWidth:2, 
    borderColor:'black', 
    margin: 5, 
    padding: 4
  },
  item: {
    fontSize: 24,
    padding: 10,
    color: "#fff",
    backgroundColor: "blue",
    borderColor: "black",
    borderWidth: 1,
    margin: 10
  },
  grid: {
    fontSize: 30,
    backgroundColor: 'blue',
    color: '#fff',
    margin: 5,
    padding: 5,
    width: 120,
    height: 120,
    textAlignVertical: 'center',
    textAlign: 'center'
  },
  compflatlistbox: {
    flexDirection: 'row'
  },
  compflatitem: {
    fontSize: 30,
    color: "orange",
    flex: 1,
    margin: 2
  }
});
