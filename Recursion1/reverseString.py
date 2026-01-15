class Solution:
    def reverseString(self, s: list[str], start = None, end = None) -> None:
        """
        Do not return anything, modify s in-place instead.
        """
        if start == None:
            start = 0
        
        if end == None:
            end = len(s) - 1

        if start >= end:
            return
        
        s[start], s[end] = s[end], s[start]
        self.reverseString(s, start + 1, end - 1)