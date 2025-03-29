export default {
  namespaced: true,

  state: {
    id: null,
    firstName: '',
    lastName: '',
    email: '',
    phone: '',
    locationId: '',
    serviceList: {},
    outlookCalendar: {
      id: null,
      calendarId: '',
      token: null,
    },
    googleCalendar: {
      id: null,
      calendarId: '',
      token: null,
    },
    appleCalendarId: '',
    stripeConnect: null,
    zoomUserId: '',
    note: '',
    description: '',
    descriptionMode: 'html',
    weekDayList: [],
    specialDayList: [],
    dayOffList: [],
  },

  getters: {
    getEmployee (state) {
      return state
    },

    getId (state) {
      return state.id
    },

    getFirstName (state) {
      return state.firstName
    },

    getLastName (state) {
      return state.lastName
    },

    getEmail (state) {
      return state.email
    },

    getPhone (state) {
      return state.phone
    },

    getLocationId (state) {
      return state.locationId
    },

    getServiceList (state) {
      return state.serviceList
    },

    getZoomUserId (state) {
      return state.zoomUserId
    },

    getOutlookCalendarId (state) {
      return state.outlookCalendar.calendarId
    },

    getOutlookToken (state) {
      return state.outlookCalendar.token
    },

    getGoogleCalendarId (state) {
      return state.googleCalendar.calendarId
    },

    getGoogleToken (state) {
      return state.googleCalendar.token
    },

    getAppleCalendarId (state) {
      return state.appleCalendarId
    },

    getStripeConnect (state) {
      return state.stripeConnect
    },

    getNote (state) {
      return state.note
    },

    getDescription (state) {
      return state.description
    },

    getDescriptionMode (state) {
      return state.descriptionMode
    },
  },

  mutations: {
    setEmployee (state, payload) {
      Object.assign(state, payload)
    },

    setId (state, payload) {
      state.id = payload
    },

    setFirstName (state, payload) {
      state.firstName = payload
    },

    setLastName (state, payload) {
      state.lastName = payload
    },

    setEmail (state, payload) {
      state.email = payload
    },

    setPhone (state, payload) {
      state.phone = payload
    },

    setLocationId (state, payload) {
      state.locationId = payload
    },

    setServiceList (state, payload) {
      state.serviceList = payload
    },

    setZoomUserId (state, payload) {
      state.zoomUserId = payload
    },

    setOutlookId (state, payload) {
      state.outlookCalendar.id = payload
    },

    setOutlookCalendarId (state, payload) {
      state.outlookCalendar.calendarId = payload
    },

    setOutlookToken (state, payload) {
      state.outlookCalendar.token = payload
    },

    setGoogleId (state, payload) {
      state.googleCalendar.id = payload
    },

    setGoogleCalendarId (state, payload) {
      state.googleCalendar.calendarId = payload
    },

    setGoogleToken (state, payload) {
      state.googleCalendar.token = payload
    },

    setAppleCalendarId (state, payload) {
      state.appleCalendarId = payload
    },

    setStripeConnect (state, payload) {
      state.stripeConnect = payload
    },

    setNote (state, payload) {
      state.note = payload
    },

    setDescription (state, payload) {
      state.description = payload
    },

    setDescriptionMode (state, payload) {
      state.descriptionMode = payload
    },

    setServiceEnabled (state, payload) {
      let { serviceId, categoryId, value } = payload
      state.serviceList[categoryId][serviceId].enabled = value
    }
  },

  actions: {
  }
}
