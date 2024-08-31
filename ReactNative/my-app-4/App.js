import React, {useState} from 'react';
import { StyleSheet, Text, View, Button, TouchableHighlight, TouchableOpacity, ActivityIndicator, Modal, Pressable, StatusBar, Platform } from 'react-native';


export default function App() {

  const [selectedRadio, setSelectedRadio] = useState(1);

  const skills = [
    {
      id: 1,
      name: "Java"
    },
    {
      id: 2,
      name: "Node"
    },
    {
      id: 3,
      name: "Python"
    },
    {
      id: 4,
      name: "React"
    }
  ];

  const [showLoader, setShowLoader] = useState(true);

  const displayLoader = () => {
    setShowLoader(true);

    setTimeout(() => {
      setShowLoader(false);
    }, 3000);
  }

  const [showModal, setShowModal] = useState(false);

  const [statusBar, setStatusBar] = useState(false);

  const [barStyle, setBarStyle] = useState("dark-content");

  const [showCustomModal, setCustomModal] = useState(false);


  return (
    <>

    {/* <View style={{flex: 1}}>
    <View style={styles.section1}>
      <View style={styles.box1}></View>
      <View style={styles.box2}></View>
      <View style={styles.box3}></View>
    </View>
    <View style={styles.section2}></View>
    <View style={styles.section3}></View>
    </View> */}


    
      {/* Button can't support more features so that we use other TouchableHighlight and TouchableOpacity */}
    {/* <View style={styles2.main}>

      <Button title='Button' color='red'/>

      <TouchableHighlight>
        <Text style={styles2.button}>Button</Text>
      </TouchableHighlight>

      <TouchableHighlight>
        <Text style={[styles2.button, styles2.success]}>Success</Text>
      </TouchableHighlight>

      <TouchableHighlight>
        <Text style={[styles2.button, styles2.danger]}>Danger</Text>
      </TouchableHighlight>

      <TouchableHighlight>
        <Text style={[styles2.button, styles2.primary]}>Primary</Text>
      </TouchableHighlight>

      <TouchableHighlight>
        <Text style={[styles2.button, styles2.warning]}>Warning</Text>
      </TouchableHighlight>

    </View> */}

    {/* For Radio Button or CheckBox use TouchableOpacity for Buttons it is easy */}
    {/* <View style={style3.main}>

      <TouchableOpacity onPress={() => setSelectedRadio(1)}>
        <View style={style3.radioWrapper}>
          <View style={style3.radio}>
            {
              selectedRadio === 1 ? <View style={style3.radioBg}></View> : null
            }
          </View>
          <Text style={style3.radioText}>Radio 1</Text>
        </View>
      </TouchableOpacity>

      <TouchableOpacity onPress={() => setSelectedRadio(2)}>
        <View style={style3.radioWrapper}>
          <View style={style3.radio}>
            {
              selectedRadio === 2 ? <View style={style3.radioBg}></View> : null
            }
          </View>
          <Text style={style3.radioText}>Radio 2</Text>
        </View>
      </TouchableOpacity>

    </View> */}

    {/* Dynamic Radio Button */}
    {/* <View style={style3.main}>
      {
        skills.map((item, index) =>
          <TouchableOpacity key={index} onPress={() => setSelectedRadio(item.id)}>
        <View style={style3.radioWrapper}>
          <View style={style3.radio}>
            {
              selectedRadio === item.id ? <View style={style3.radioBg}></View> : null
            }
          </View>
          <Text style={style3.radioText}>{item.name}</Text>
        </View>
      </TouchableOpacity>
        )
      }
    </View> */}


    {/* Activity Indicator - Loader */}
    <View>
      {/* <ActivityIndicator size={50} color='gold'  />
      <ActivityIndicator size='small' color='green' animating={showLoader} />
      <Button title='show loader' onPress={displayLoader} /> */}

      
      {/* Dialog or Modal Box => It cover whole area */}
      {/* <Modal transparent={true} visible={showModal} animationType='slide'> 
      
        <View style={style4.centeredView}>
          <View style={style4.modalView}>
            <Text style={style4.modalText}>Hello Code Step By Step</Text>
            <Button title='close' onPress={()=>setShowModal(false)} />
          </View>
        </View>
      </Modal>

      <View style={style4.buttonView}>
        <Button title='Open Modal' onPress={()=>setShowModal(true)} />
      </View> */}


      {/* Pressable Events */}
      {/* <Pressable 
      onPress={()=>console.warn("normal press")}
      onLongPress={()=>console.warn("long press")}  //1.5sec
      onPressIn={()=>console.warn("press in")}
      onPressOut={()=>console.warn("press out")}
      >
        <Text style={style5.pressableText}> Pressable </Text>
      </Pressable> */}


      {/* Status Bar => Top Icons of Navigation in Mobile for percentage, time notification */}
      {/* <StatusBar 
      backgroundColor='red'
      barStyle={barStyle}
      // barStyle='light-content'
      // barStyle='default'
      hidden={statusBar}
      />

      <Button title='Toggle StatusBar'  onPress={()=>setStatusBar(!statusBar)} />
      <Button title='Light Style'  onPress={()=>setBarStyle("light-content")} />
      */}

    </View> 



    {/* Platform => Android, ios, window */}

    {/* Check Plateform */}
    {/* <Text style={{fontSize: 30}}>Platform : {Platform.OS} </Text>

    {
      Platform.OS == "android" ? 
      <View style={{backgroundColor:'green', width: 100, height:100}}></View>
      :
      <View style={{backgroundColor:'red', width: 100, height:100}}></View>
    }
    
    <Text style={style6.text}>Platform Classify</Text> */}
    {/* All Platform Methods Can See */}
    {/* <Text style={style6.text}>{JSON.stringify(Platform)}</Text>
    <Text style={style6.text}>{JSON.stringify(Platform.constants.reactNativeVersion)}</Text>
    <Text style={style6.text}>{JSON.stringify(Platform.constants.reactNativeVersion.minor)}</Text> */}


    {/* Custom Modal */}
      <View style={style7.container}>
      {
        showCustomModal ? 
        <View style={style7.modal}>
        <View style={style7.body}>
          <Text>Hello World</Text>
          <Button title="Close" onPress={()=>setCustomModal(false)} />
        </View>
      </View> : null
      }
      
    <Button title="Open Dialog" onPress={()=>setCustomModal(true)}/>
    </View>
    
     

    </>
  );
}


// flex : 1 1 => 50% 50% ratio => upper and below
// flex : 2 1 => 66.6% 33.3% ratio
// flex : 3 1 => 75% 25% ratio
// flex : 1 1 1 => 33.3% 33.3% 33.3% ratio and so on..
// if other component not have flex then they consume only require area other consumed by flex components
//Responsive Layout

const styles = StyleSheet.create({
  section1: {
    flex: 2,
    flexDirection: 'row',
    backgroundColor: 'green'
  },
  box1: {
    flex: 1,
    backgroundColor: 'yellow',
    margin: 10
  },
  box2: {
    flex: 1,
    backgroundColor: 'red',
    margin: 10
  },
  box3: {
    flex: 1,
    backgroundColor: 'yellow',
    margin: 10
  },
  section2 : {
    flex: 1,
    backgroundColor: 'blue'
  },
  section3: {
    flex: 1,
    backgroundColor: 'green'
  }
});

const styles2 = StyleSheet.create({
  main: {
    flex: 1
  },
  button: {
    backgroundColor: '#bbb',
    color: "#fff",
    fontSize: 24,
    textAlign: 'center',
    padding: 10,
    margin: 10,
    borderRadius: 10,
    shadowColor: 'red',
    elevation: 10,
    shadowOpacity: 0.7
  },
  success: {
    backgroundColor: 'green'
  },
  danger: {
    backgroundColor: 'red'
  },
  primary: {
    backgroundColor: 'blue'
  },
  warning: {
    backgroundColor: 'gold'
  }
});

const style3 = StyleSheet.create({
  main: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center'
  },
  radioWrapper:{
    flexDirection: 'row',
    alignItems: 'center'
  },
  radioText: {
    fontSize: 30
  },
  radio: {
    height: 40,
    width: 40,
    borderColor: 'black',
    borderWidth: 2,
    borderRadius: 20,
    margin: 10,
  },
  radioBg: {
    backgroundColor: 'black',
    width: 28,
    height: 28,
    borderRadius: 20,
    margin: 4
  }
});

const style4 = StyleSheet.create({
  centeredView: {
    flex:1,
    justifyContent: 'center',
    alignItems: 'center',
  },
  modalView: {
    backgroundColor: 'skyblue',
    padding: 30,
    borderRadius: 20,
  },
  modalText: {
    fontSize: 30
  }
});

const style5 = StyleSheet.create({
  pressableText: {
    backgroundColor: 'blue',
    padding: 10,
    margin: 10,
    borderRadius: 5,
    fontSize: 30,
    textAlign: 'center',
    shadowColor: 'black',
    elevation: 5,
    shadowOpacity: 0.7
  }
});

const style6 = StyleSheet.create({
  text: {
    color: Platform.OS =='android'? 'orange' : 'blue'
  }
});

const style7 = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'flex-end'
  },
  modal: {
    flex: 1,
    backgroundColor: 'rgba(50, 50, 50, 0.5)',
    justifyContent: 'center',
    alignItems: 'center'
  },
  body: {
    backgroundColor: '#fff',
    height: 300,
    weight: 300,
    padding: 20,
    justifyContent: 'flex-end',
    borderRadius: 10
  }
});