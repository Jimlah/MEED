
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