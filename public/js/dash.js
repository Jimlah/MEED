
function dropdown() {
  return {
    show: true,
    toggle() {
      this.show = !this.show
    }, close() {
      this.show = true
    },
    isClose() {
      return this.show
    }
  }
}

function notify() {
  return {
    show: true,
    toggle() {
      this.show = !this.show
    },
    close() {
      this.show = true
    },
    isClose() {
      return this.show
    }
  }
}

function nav() {
  return {
    show: true,
    toggle(){
      console.log(this.show)
      this.show = false
    },
    close(){
      this.show = true
    },
    isOpen(){
      console.log(this.show)
      return this.show
    }
  }
}